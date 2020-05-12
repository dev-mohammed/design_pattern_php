<?php


namespace App\Patterns\Creational\Prototype\Employee\Privileges\Types;


interface PrivilegesTypeInterface
{

    public function enable(): bool;

    public function disable(): bool;

}