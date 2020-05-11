<?php


namespace App\OOP\Patterns\Creational\Builder;


use App\OOP\Patterns\Creational\Builder\Computer\CoolingSystem;
use App\OOP\Patterns\Creational\Builder\Computer\Keyboard;
use App\OOP\Patterns\Creational\Builder\Computer\Monitor;
use App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MotherBoard;
use App\OOP\Patterns\Creational\Builder\Computer\Mouse;
use App\OOP\Patterns\Creational\Builder\Computer\Types\Computer;
use App\OOP\Patterns\Creational\Builder\Computer\UPS;

abstract class Builder
{
    protected  $computer;

    abstract protected function buildMotherBoard();

    abstract protected function buildKeyboard();

    abstract protected function buildMouse();

    abstract protected function buildMonitor();

    abstract protected function buildCoolingSystem();

    abstract protected function buildUPS();

    abstract public function getComputer();

}