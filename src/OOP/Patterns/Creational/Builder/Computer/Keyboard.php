<?php


namespace App\OOP\Patterns\Creational\Builder\Computer;


class Keyboard
{

    private  $utfSupport;

    /**
     * Keyboard constructor.
     * @param bool $utfSupport
     */
    public function __construct(bool $utfSupport)
    {
        $this->utfSupport = $utfSupport;
    }

    /**
     * @return bool
     */
    public function isUtfSupport(): bool
    {
        return $this->utfSupport;
    }




}