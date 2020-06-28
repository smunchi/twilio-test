<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC33aa177fd40339e36a82f78d5727d1bf';
$auth_token = '8015269d9a13dd1d3e1394e2dfd943cb';

// A Twilio number you own with SMS capabilities
$twilio_number = "+12058929837";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+8801723523983',
    array(
        'from' => $twilio_number,
        'body' => 'I sent this message in under 10 minutes!'
    )
);

echo 'sms sent';

