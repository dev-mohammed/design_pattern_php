<?php


namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;


use App\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;

class DesktopButton extends AbstractButton
{
    function onClick(): void
    {
        echo "the button has been clicked\n";
    }

    public function render(): void
    {
        echo "Desktop Button";
    }
}