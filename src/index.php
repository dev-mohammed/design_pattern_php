<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Patterns\Creational\Singleton\AppSettings;

$settings = AppSettings::getInstance();
var_dump($settings::getConfig('Database'));

$settings2 = AppSettings::getInstance();
var_dump($settings::getConfig('Cache'));


//$settings3 = clone $settings; //prevent clone method

var_dump($settings, $settings2);