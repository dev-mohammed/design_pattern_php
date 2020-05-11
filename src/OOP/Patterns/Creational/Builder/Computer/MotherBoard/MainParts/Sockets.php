<?php


namespace App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\MainParts;


class Sockets
{
    private  $sockets;

    /**
     * Sockets constructor.
     * @param  $sockets
     */
    public function __construct(array $sockets)
    {
        $this->sockets = $sockets;
    }

    /**
     * @return array
     */
    public function getSockets(): array
    {
        return $this->sockets;
    }

}