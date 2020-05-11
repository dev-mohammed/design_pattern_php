<?php


namespace App\OOP\Patterns\Creational\Builder\Computer;


class CoolingSystem
{

    private  $lowTempLimit;

    /**
     * CoolingSystem constructor.
     * @param  $lowTempLimit
     */
    public function __construct(int $lowTempLimit)
    {
        $this->lowTempLimit = $lowTempLimit;
    }

    /**
     * @return int
     */
    public function getLowTempLimit(): int
    {
        return $this->lowTempLimit;
    }


}