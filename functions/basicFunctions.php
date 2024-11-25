<?php

declare(strict_types=1);


function greet(string $name): string
{
    return "Hello $name";
}


echo greet('Rubén') . PHP_EOL;


function greetWithTime(string $name, string $time = "day"): string
{
    return "Good $time, $name";
}


echo greetWithTime('Ernesto') . PHP_EOL;
