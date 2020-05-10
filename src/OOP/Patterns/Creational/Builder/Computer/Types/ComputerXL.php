<?php


namespace App\OOP\Patterns\Creational\Builder\Computer\Types;


use App\OOP\Patterns\Creational\Builder\Computer\CoolingSystem;
use App\OOP\Patterns\Creational\Builder\Computer\UPS;

class ComputerXL extends Computer implements ICoolingSystem , IPower
{
    private  $cs;
    private  $ups;

    public function turnOn(): bool
    {
        // TODO: do something and then
        return true;
    }

    public function turnOff(): bool
    {
        // TODO: do something and then
        return true;
    }

    public function coolDown(int $temp): bool
    {
        // TODO: do something to cool down to $temp
        return true;
    }

    public function backupPower(): bool
    {
        // TODO: Implement backupPower() method.
        return true;
    }

    /**
     * @param CoolingSystem $cs
     */
    public function setCs(CoolingSystem $cs): void
    {
        $this->cs = $cs;
    }

    /**
     * @param UPS $ups
     */
    public function setUps(UPS $ups): void
    {
        $this->ups = $ups;
    }

    /**
     * @return CoolingSystem
     */
    public function getCs(): CoolingSystem
    {
        return $this->cs;
    }

    /**
     * @return UPS
     */
    public function getUps(): UPS
    {
        return $this->ups;
    }




}