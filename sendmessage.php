<?php

use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;

require __DIR__ . "/vendor/autoload.php";


$message = $_POST["message"];
$number = $_POST["number"];

$apiURL = "l3gn6d.api.infobip.com";
$apiKey = "9a7aff7c4c92d610efb54871370790d5-635f27d2-e282-4e04-a58e-011848979ffd";

$configuration = new Configuration(host: $apiURL, apiKey: $apiKey);
$api = new SmsApi(config: $configuration);

$destination = new SmsDestination(to: $number);

$theMessage = new SmsTextualMessage(
    destinations: [$destination],
    text: $message,
    from: "Silverio Batoc Lying-In Clinic"
);


//Send SMS Message
$request = new SmsAdvancedTextualRequest(messages: [$theMessage]);
$response = $api->sendSmsMessage($request);

echo 'SMS Message Sent';

?>