<?php


namespace App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MainParts;


class RAM
{

    private  $size;
    /**
     * CPU constructor.
     * @param  $size
     */
    public function __construct($size)
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

}