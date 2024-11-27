<?php

declare(strict_types=1);

var_dump(
    null == null,
    null == false,
    null == 0,
    null == '',
    null == [],
);

$db = $abc ?? 'default';


function greet(?string $name): string
{
    $name ?: 'Guest';
    return "Hello $name" . PHP_EOL;
}

echo greet('Iván');
echo greet(null);
