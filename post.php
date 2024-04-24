<?php

require __DIR__ . '/vendor/autoload.php';

$sid = "";
$token = "";
$client = new Twilio\Rest\Client($sid, $token);

$number = $_POST['number']; 
$message = $_POST['message'];

if(!empty($number) and !empty($message))
    $client->messages->create(
        strval('+63'.$number),
        [
            'from' => '+19492817431',
            'body' => $message
        ]
    );
    echo "SMS Message Sent";
?>