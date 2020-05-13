<?php


namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory;


abstract class AbstractWindow
{
    protected $components;
    protected $size;

    /**
     * AbstractWindow constructor.
     * @param $size
     */
    public function __construct($size)
    {
        $this->size = $size;
    }


    public function addComponents(Renderable $component)
    {
        $this->components[] = $component;
    }


    function componentsRender(Renderable $elm)
    {
        $elm->render();
    }

    /**
     * @return string
     */
    public function render(): string
    {
        $renderedComponents = implode('', array_map(array($this, 'componentsRender'), $this->components));
        return "Welcome to our GUI form\n{$renderedComponents}";

    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size): void
    {
        $this->size = $size;
    }


    abstract public function onClose(): void;

    abstract public function onResize(): void;


}