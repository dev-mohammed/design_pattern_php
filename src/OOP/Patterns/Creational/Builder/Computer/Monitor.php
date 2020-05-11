<?php


namespace App\OOP\Patterns\Creational\Builder\Computer;


class Monitor
{
    private  $resolution;

    /**
     * Monitor constructor.
     * @param string $resolution
     */
    public function __construct(string $resolution)
    {
        $this->resolution = $resolution;
    }

    /**
     * @return string
     */
    public function getResolution(): string
    {
        return $this->resolution;
    }




}