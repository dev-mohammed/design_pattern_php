<?php


namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\WebForm;


use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractFormFactory;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;
use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractWindow;

class WebFormFactory implements AbstractFormFactory
{

    public function createTextInput(): AbstractTextInput
    {
        return new WebTextInput('web input', 'enter your name', '');
    }

    public function createTextArea(): AbstractTextArea
    {
        return new WebTextArea('web text area', 'enter your message');
    }

    public function createButton(): AbstractButton
    {
        return new WebButton('submit');
    }

    public function createWindow(): AbstractWindow
    {
        return new WebWindow('800 x 600');
    }
}