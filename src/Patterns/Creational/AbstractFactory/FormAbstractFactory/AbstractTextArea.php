<?php


namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory;


abstract class AbstractTextArea implements Renderable
{
    protected $name;
    protected $text;

    /**
     * AbstractTextArea constructor.
     * @param $name
     * @param $text
     */
    public function __construct($name, $text)
    {
        $this->name = $name;
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getName() : string
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
    public function getText() : string
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text): void
    {
        $this->text = $text;
    }


    abstract function onResize(): void;


}