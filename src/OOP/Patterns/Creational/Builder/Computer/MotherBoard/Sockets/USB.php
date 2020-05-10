<?php


namespace App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\Sockets;


class USB
{

    private  $version;

    /**
     * USB constructor.
     * @param  $version
     */
    public function __construct(string $version)
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }




}