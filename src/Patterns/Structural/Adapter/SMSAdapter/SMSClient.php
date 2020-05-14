<?php


namespace App\Patterns\Structural\Adapter\SMSAdapter;


use App\Patterns\Structural\Adapter\SMSAdapter\Messages\Message;

abstract class SMSClient
{
    protected $messages;
    protected $deliverStatus = SMSDeliveryStatus::PENDING;
    /**
     * SMSClient constructor.
     * @param $messages
     */
    public function __construct($messages = [])
    {
        $this->messages = $messages;
    }

    public function addMessage(Message $message)
    {
        array_push($this->messages, $message);
    }

    abstract public function filterNumbers(): bool;

    abstract public function send(): bool;

    abstract public function getDeliveryStatus(): string;


}