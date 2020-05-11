<?php


namespace App\OOP\Patterns\Creational\Builder\Computer\Types;


interface ICoolingSystem
{

    public function coolDown(int $temp): bool;

}