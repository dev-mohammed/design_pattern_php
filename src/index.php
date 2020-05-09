<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\OOP\Patterns\Creational\Builder\Builders\ComputerCSBuilder;
use App\OOP\Patterns\Creational\Builder\Builders\ComputerXLBuilder;
use App\OOP\Patterns\Creational\Builder\Director;

$director = new Director(new ComputerCSBuilder());
$computer = $director->makeComputer();
var_dump($director);
$director->changeBuilder(new ComputerXLBuilder());
$computer = $director->makeComputer();
var_dump($director);
