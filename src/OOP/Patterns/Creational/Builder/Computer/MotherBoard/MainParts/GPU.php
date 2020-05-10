<?php


namespace App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MainParts;


class GPU
{
    private  $size;

    /**
     * GPU constructor.
     * @param  $size
     */
    public function __construct(int $size)
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