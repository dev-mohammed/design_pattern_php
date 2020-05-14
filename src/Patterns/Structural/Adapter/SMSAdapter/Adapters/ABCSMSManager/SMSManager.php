<?php


namespace App\Patterns\Structural\Adapter\SMSAdapter\Adapters\ABCSMSManager;


class SMSManager
{
    public function send(array $messages)
    {
        if ($this->checkConnection() && $this->authenticate() && $this->connect()) {
            foreach ($messages as $message) {
                echo "Your Message {$message['text']} is being sent to {$message['number']} \n";
            }
        }
    }

    public function connect()
    {
        return true;
    }

    public function authenticate()
    {
        return true;
    }

    public function checkConnection()
    {
        return true;
    }

    public function validatePhoneNumber($phoneNumber)
    {
        return strlen($phoneNumber) < 8;
    }

    public function getDeliveryStatus(): string
    {
        return rand(5, 8);
    }
}