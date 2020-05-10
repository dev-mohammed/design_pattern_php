<?php


namespace App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MainParts;


class NetworkCard
{

    private  $category;

    /**
     * NetworkCard constructor.
     * @param  $category
     */
    public function __construct(int $category)
    {
        $this->category = $category;
    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->category;
    }


}