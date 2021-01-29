<?php


namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory;


abstract class AbstractTextInput implements Renderable
{
    protected $name;
    protected $label;
    protected $value;

    /**
     * AbstractTextInput constructor.
     * @param $name
     * @param $label
     * @param $value
     */
    public function __construct($name, $label, $value)
    {
        $this->name  = $name;
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label): void
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getValue()
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

    abstract function onChange(): void;

}