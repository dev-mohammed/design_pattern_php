<?php


namespace App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MainParts;


class CPU
{

    private  $speed;
    /**
     * CPU constructor.
     * @param  $speed
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