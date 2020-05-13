<?php


namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory;


class GUIClient
{

    private $factory;

    /**
     * GUIClient constructor.
     * @param AbstractFormFactory $factory
     */
    public function __construct(AbstractFormFactory $factory)
    {
        $this->factory = $factory;
    }

    public function setFactory(AbstractFormFactory $factory)
    {
        $this->factory = $factory;
    }


    public function createForm(): string
    {
        $window = $this->factory->createWindow();
        $window->addComponents($this->factory->createTextInput());
        $window->addComponents($this->factory->createTextArea());
        $window->addComponents($this->factory->createButton());
        return $window->render();
    }


}