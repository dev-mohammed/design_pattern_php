<?php


namespace App\Patterns\Creational\Prototype\Employee\Privileges\Types;


class WebProjectPrivilege implements PrivilegesTypeInterface
{

    public function enable(): bool
    {
        return true;
    }

    public function disable(): bool
    {
        return true;
    }
}