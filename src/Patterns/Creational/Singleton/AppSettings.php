<?php


namespace App\Patterns\Creational\Singleton;


class AppSettings
{
    private static $config;
    private static $instance = null;

    private function __construct()
    {
        self::$config = parse_ini_file(__DIR__ . '/config.ini' , true);
    }

    private function __clone()
    {
    }

    public static function getInstance(): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function getConfig($key)
    {
        return self::$config[$key] ?? null;
    }
}