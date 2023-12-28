<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once 'vendor/autoload.php';

use Twilio\Rest\Client;
 

 

 

$sid    = "AC25e12df9a67265f35135b4e28b2e28d2";
$token  = "f6274ff85fb2d186aefbef35ec106b5b";
$twilio = new Client($sid, $token);

$message = $twilio->messages
  ->create("whatsapp:+966564844382", // to
    array( 
      "from" => "whatsapp:+966596945907",
      "body" => "wwe 2"
    )
  );

print($message->sid);