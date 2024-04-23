<?php

require __DIR__ . '/vendor/autoload.php';

// $sid = "AC331dbe79a70bdbc1c012a924ed259a8d";
// $sid = "AC331dbe79a70bdbc1c012a924ed259a8d";
$token = "";
$token = "";
$client = new Twilio\Rest\Client($sid, $token);

$number = $_POST['number']; 
$message = $_POST['message'];

if(!empty($number) and !empty($message)){
    $client->messages->create(
        strval('+63'.$number),
        [
            'from' => '+19492817431',
            'body' => 'Message Testing 123'
        ]
    );

    echo "SMS Message Sent";
}


