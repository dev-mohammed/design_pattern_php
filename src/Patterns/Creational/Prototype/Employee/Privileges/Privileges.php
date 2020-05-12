<?php


namespace App\Patterns\Creational\Prototype\Employee\Privileges;


use App\Patterns\Creational\Prototype\Employee\Privileges\Types\PrivilegesTypeInterface;

class Privileges
{
    private $privileges;

    /**
     * Privileges constructor.
     * @param $privileges
     */
    public function __construct($privileges)
    {
        $this->privileges = $privileges;
    }

    public function addPrivilege(PrivilegesTypeInterface $privilege)
    {
        array_push($this->privileges, $privilege);
    }

    public function clearPrivileges()
    {
        $this->privileges = [];
    }

}