<?php
// Include the bundled autoload from the Twilio PHP Helper Library
require __DIR__ . '/twilio-php-master/Twilio/autoload.php';
use Twilio\Rest\Client;
// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC9dac70fee3fa6752d26fdf2f6ee06511';
$auth_token = '8d1f02b8731ccfbf5f97e30ba7eddddc';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
// A Twilio number you own with SMS capabilities
$twilio_number = "+15017122661";
$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+15017122661',
    array(
        'from' => $15017122661,
        'body' => 'I sent this message in under 10 minutes!'
    )
);