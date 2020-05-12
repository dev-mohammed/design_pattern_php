<?php


namespace App\Patterns\Creational\Prototype\Employee\Privileges\Types;


class ServerRoomProjectPrivilege implements PrivilegesTypeInterface
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