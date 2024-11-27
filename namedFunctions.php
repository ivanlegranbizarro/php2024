<?php

declare(strict_types=1);

function greet(string $name, int $age): string
{
    return "Hello $name, you are $age years old";
}


greet(name: 'Iván', age: 39);
