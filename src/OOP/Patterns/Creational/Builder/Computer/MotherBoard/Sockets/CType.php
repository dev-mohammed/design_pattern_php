<?php


namespace App\OOP\Patterns\Creational\Builder\Computer\MotherBoard\Sockets;


class CType
{

    private  $withVideoTransfer;

    /**
     * CType constructor.
     * @param  $withVideoTransfer
     */
    public function __construct(bool $withVideoTransfer)
    {
        $this->withVideoTransfer = $withVideoTransfer;
    }

    /**
     * @return bool
     */
    public function isWithVideoTransfer(): bool
    {
        return $this->withVideoTransfer;
    }




}