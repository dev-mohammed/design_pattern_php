<?php


namespace App\OOP\Patterns\Creational\Builder\Computer\Types;


use App\OOP\Patterns\Creational\Builder\Computer\Keyboard;
use App\OOP\Patterns\Creational\Builder\Computer\Monitor;
use App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MotherBoard;
use App\OOP\Patterns\Creational\Builder\Computer\Mouse;

abstract class Computer
{
    protected  $motherBoard;
    protected  $keyboard;
    protected  $mouse;
    protected  $monitor;

    abstract public function turnOn(): bool;

    abstract public function turnOff(): bool;



    /**
     * @param MotherBoard $motherBoard
     */
    public function setMotherBoard(MotherBoard $motherBoard): void
    {
        $this->motherBoard = $motherBoard;
    }

    /**
     * @param Keyboard $keyboard
     */
    public function setKeyboard(Keyboard $keyboard): void
    {
        $this->keyboard = $keyboard;
    }

    /**
     * @param Mouse $mouse
     */
    public function setMouse(Mouse $mouse): void
    {
        $this->mouse = $mouse;
    }

    /**
     * @param Monitor $monitor
     */
    public function setMonitor(Monitor $monitor): void
    {
        $this->monitor = $monitor;
    }


    public function dashboard(): string
    {
        return 'dashboard';
    }


}