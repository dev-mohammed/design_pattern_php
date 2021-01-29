<?php


namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory;


abstract class AbstractButton implements Renderable
{
    protected $value;

    /**
     * AbstractButton constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue() : string
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }


    abstract public function onClick(): void;

}