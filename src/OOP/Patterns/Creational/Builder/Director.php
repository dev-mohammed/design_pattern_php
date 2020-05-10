<?php


namespace App\OOP\Patterns\Creational\Builder;


use App\OOP\Patterns\Creational\Builder\Computer\Types\Computer;

class Director
{

    private  $builder;

    /**
     * Director constructor.
     * @param  $builder
     */
    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * @param Builder $builder
     */
    public function changeBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }

    public function makeComputer(): Computer
    {
       return $this->builder->getComputer();
    }


}