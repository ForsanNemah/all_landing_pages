<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once 'vendor/autoload.php';

use Twilio\Rest\Client;
 

 

 

$sid    = "AC25e12df9a67265f35135b4e28b2e28d2";
$token  = "[AuthToken]";
$twilio = new Client($sid, $token);

$message = $twilio->messages
  ->create("whatsapp:+966568430828", // to
    array(
      "from" => "whatsapp:+14155238886",
      "body" => "wwe"
    )
  );

print($message->sid);