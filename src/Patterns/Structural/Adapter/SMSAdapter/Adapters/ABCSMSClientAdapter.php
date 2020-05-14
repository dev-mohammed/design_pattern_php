<?php


namespace App\Patterns\Structural\Adapter\SMSAdapter\Adapters;


use App\Patterns\Structural\Adapter\SMSAdapter\Adapters\ABCSMSManager\SMSManager;
use App\Patterns\Structural\Adapter\SMSAdapter\Messages\Message;
use App\Patterns\Structural\Adapter\SMSAdapter\SMSClient;
use App\Patterns\Structural\Adapter\SMSAdapter\SMSDeliveryStatus;


class ABCSMSClientAdapter extends SMSClient
{
    private $manager;


    public function setManager($manager)
    {
        $this->manager = $manager;
    }
    

    function validateNumberCallback(Message $message)
    {
        return $this->manager->validatePhoneNumber($message->getNumber());
    }

    public function filterNumbers(): bool
    {
        $this->messages = array_filter($this->messages, array($this, 'validateNumberCallback'));
        return !empty($this->messages);
    }


    public function send(): bool
    {
        if ($this->filterNumbers()) {
            $this->manager->send(
                array_map(function (Message $message): array {
                    return [
                        'number' => $message->getNumber(),
                        'text'   => $message->getMessage()
                    ];
                }, $this->messages)
            );
        }
        return $this->getDeliveryStatus() === SMSDeliveryStatus::SENT;
    }

    public function getDeliveryStatus(): string
    {
        return $this->manager->getDeliveryStatus() - 4;
    }
}