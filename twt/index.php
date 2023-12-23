<?php
require_once "vendor/autoload.php";



use Twilio\Rest\Client;

// Find your Account SID and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure
$sid = getenv("AC25e12df9a67265f35135b4e28b2e28d2");
$token = getenv("f6274ff85fb2d186aefbef35ec106b5b");
$twilio = new Client($sid, $token);

$message = $twilio->messages
                  ->create("whatsapp:+15005550006", // to
                           [
                               "from" => "whatsapp:+14155238886",
                               "body" => "Hello there!"
                           ]
                  );

print($message->sid);