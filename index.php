<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'XXXXXXXXXXXXXXX';
$auth_token = 'XXXXXXXXXXXXXXXXXXXXXXX';

// A Twilio number you own with SMS capabilities
$twilio_number = "+120589XXXXX";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+8801723XXXXXX',
    array(
        'from' => $twilio_number,
        'body' => 'I sent this message in under 10 minutes!'
    )
);

echo 'sms sent';

