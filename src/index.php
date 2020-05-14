<?php

require_once __DIR__ . '/../vendor/autoload.php';

//use App\Patterns\Structural\Adapter\SMSAdapter\MonkeySMSClient;
use App\Patterns\Structural\Adapter\SMSAdapter\Adapters\ABCSMSManager\SMSManager;
use App\Patterns\Structural\Adapter\SMSAdapter\Adapters\ABCSMSClientAdapter;
use App\Patterns\Structural\Adapter\SMSAdapter\Messages\SMSMessage;


$message  = new SMSMessage('welcome to our web', '0123456789');
$message2 = new SMSMessage('please join our community', '098765');
$message3 = new SMSMessage('your account has been activated', '09876587215');
$message4 = new SMSMessage('Thank you for you feedback', '0987665');


$client = new ABCSMSClientAdapter([
    $message, $message2, $message3
]);
$client->setManager(new SMSManager());
$client->addMessage($message4);

$client->filterNumbers();
$client->send();

var_dump($client->getDeliveryStatus());