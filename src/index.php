<?php

require_once __DIR__ . '/../vendor/autoload.php';


use App\Patterns\Creational\Prototype\Employee\EmployeePrototype;
use App\Patterns\Creational\Prototype\Employee\ProfileData;
use App\Patterns\Creational\Prototype\Employee\Address;
use App\Patterns\Creational\Prototype\Employee\Salary;
use App\Patterns\Creational\Prototype\Employee\Privileges\Privileges;
use App\Patterns\Creational\Prototype\Employee\Privileges\Types\WebProjectPrivilege;
use App\Patterns\Creational\Prototype\Employee\Privileges\Types\NetworkProjectPrivilege;
use App\Patterns\Creational\Prototype\Employee\Privileges\Types\ServerRoomProjectPrivilege;


$mohamed = new EmployeePrototype(
    new ProfileData(
        'mohamed adel',
        29,
        new Address(
            '51.2554',
            '54.6586',
            'hassan essa',
            'ciro',
            'egypt',
            13,
            '1234'),
        '04031154230',
        '+201014422040',
        'mohamed.adel'
    ),
    new Salary(
        3000,
        0.32,
        300
    ),
    new Privileges(
        [
            new WebProjectPrivilege(),
            new ServerRoomProjectPrivilege()
        ]
    )
);

$mohamed->getPrivilages()->addPrivilege(new NetworkProjectPrivilege());
var_dump($mohamed);

$ahmed = clone $mohamed;
var_dump($ahmed);
