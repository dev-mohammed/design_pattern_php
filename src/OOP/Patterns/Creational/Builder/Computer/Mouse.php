<?php


namespace App\OOP\Patterns\Creational\Builder\Computer;


class Mouse
{
    private  $withExtraUtilities;

    /**
     * Mouse constructor.
     * @param bool $withExtraUtilities
     */
    public function __construct(bool $withExtraUtilities)
    {
        $this->withExtraUtilities = $withExtraUtilities;
    }

    /**
     * @return bool
     */
    public function isWithExtraUtilities(): bool
    {
        return $this->withExtraUtilities;
    }




}