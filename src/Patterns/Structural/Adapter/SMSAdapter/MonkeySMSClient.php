<?php


namespace App\Patterns\Structural\Adapter\SMSAdapter;


use App\Patterns\Structural\Adapter\SMSAdapter\Messages\Message;

class MonkeySMSClient extends SMSClient
{
    function validateNumberCallback(Message $message)
    {
        return $message->validateNumber();
    }

    public function filterNumbers(): bool
    {
        $this->messages = array_filter($this->messages, array($this, 'validateNumberCallback'));
        return !empty($this->messages);
    }

    public function send(): bool
    {
        if ($this->filterNumbers()) {
            /** @var Message $message */
            foreach ($this->messages as $message) {
                $this->deliverStatus = rand(1, 4);
                echo "Message is being sent '{$message->getMessage()}' \n";
            }
        }
        return $this->getDeliveryStatus() === SMSDeliveryStatus::SENT;
    }

    public function getDeliveryStatus(): string
    {
        return $this->deliverStatus;
    }

}