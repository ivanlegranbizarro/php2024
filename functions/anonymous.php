<?php

declare(strict_types=1);

$message = 'Hello';

$greet = function (string $name) use ($message): string {
    return "$message, $name" . PHP_EOL;
};


function greet($name)
{
    return 'Hello' . $name;
}


$numbers = [1, 2, 3];

$squared = array_map(fn($num) => $num * $num, $numbers);


// print $squared

print_r($squared);
