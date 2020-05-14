<?php


namespace App\Patterns\Structural\Adapter\SMSAdapter\Messages;


class SMSMessage implements Message
{

    private $message;
    private $number;

    /**
     * SMSMessage constructor.
     * @param $message
     * @param $number
     */
    public function __construct($message, $number)
    {
        $this->message = $message;
        $this->number  = $number;
    }

    /**
     * @return mixed
     */
    public function getMessage() : string
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getNumber():string
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number): void
    {
        $this->number = $number;
    }

    public function validateMessage(): bool
    {
        return strlen($this->message) > 10;
    }

    public function validateNumber(): bool
    {
        return strlen($this->number) > 8;
    }
}