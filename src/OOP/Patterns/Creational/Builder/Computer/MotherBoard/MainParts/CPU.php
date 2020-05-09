<?php


namespace App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MainParts;


class CPU
{

    private float $speed;
    /**
     * CPU constructor.
     * @param float $speed
     */
    public function __construct($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return float
     */
    public function getSpeed(): float
    {
        return $this->speed;
    }
    
    
    


}