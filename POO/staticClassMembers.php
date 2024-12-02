<?php

declare(strict_types=1);

class MathUtils
{
    public static float $pi = 3.14159;

    public static function square(float $num): float
    {
        return $num * $num;
    }
}

// Singleton pattern: class with only one instance

class Connection
{
    private static ?Connection $instance = null;
    private function __construct() {}

    public static function singleton(): Connection
    {
        return self::$instance ?? self::$instance = new self();
    }
}

$connection = Connection::singleton();
