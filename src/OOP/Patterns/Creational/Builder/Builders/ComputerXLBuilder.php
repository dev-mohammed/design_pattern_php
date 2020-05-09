<?php


namespace App\OOP\Patterns\Creational\Builder\Builders;


use App\OOP\Patterns\Creational\Builder\Builder;
use App\OOP\Patterns\Creational\Builder\Computer\CoolingSystem;
use App\OOP\Patterns\Creational\Builder\Computer\Keyboard;
use App\OOP\Patterns\Creational\Builder\Computer\Monitor;
use App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\CPU;
use App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\Disk;
use App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\GPU;
use App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\NetworkCard;
use App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\RAM;
use App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MainParts\Sockets;
use App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MotherBoard;
use App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\Sockets\CType;
use App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\Sockets\USB;
use App\OOP\Patterns\Creational\Builder\Computer\Mouse;
use App\OOP\Patterns\Creational\Builder\Computer\Types\Computer;
use App\OOP\Patterns\Creational\Builder\Computer\Types\ComputerXL;
use App\OOP\Patterns\Creational\Builder\Computer\UPS;

class ComputerXLBuilder extends Builder
{

    protected function buildMotherBoard(): MotherBoard
    {
        $cpu         = new CPU(2.8);
        $ram         = new RAM(16);
        $gpu         = new GPU(2);
        $sockets     = new Sockets([
            new USB(2),
            new USB(3),
            new CType(true),
            new CType(true),
            new CType(true),
        ]);
        $networkCard = new NetworkCard(5);
        $disk        = new Disk('SSD');

        return new MotherBoard(
            $cpu, $ram, $gpu, $sockets, $networkCard, $disk
        );
    }

    protected function buildKeyboard(): Keyboard
    {
        return new Keyboard(true);
    }

    protected function buildMouse(): Mouse
    {
        return new Mouse(false);
    }

    protected function buildMonitor(): Monitor
    {
        new Monitor('1920 FHD');
    }

    protected function buildCoolingSystem(): CoolingSystem
    {
        return new CoolingSystem(5);
    }

    protected function buildUPS(): UPS
    {
        return new UPS(96);
    }

    public function getComputer(): Computer
    {
        $computer = new ComputerXL();
        $computer->setKeyboard($this->buildKeyboard());
        $computer->setMonitor($this->buildMonitor());
        $computer->setMotherBoard($this->buildMotherBoard());
        $computer->setMouse($this->buildMouse());
        $computer->setCs($this->buildCoolingSystem());
        $computer->setUps($this->buildUPS());
        return $computer;
    }
}