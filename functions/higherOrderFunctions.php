<?php

declare(strict_types=1);

function apply(callable $op, int $a, int $b): int
{
    return $op($a, $b);
}

// Los array map, los usort, etcétera, son siempre funciones de orden superior

$users = [
    ['name' => 'John', 'age' => 30, 'role' => 'admin'],
    ['name' => 'Jane', 'age' => 25, 'role' => 'user'],
    ['name' => 'Bob', 'age' => 35, 'role' => 'user'],
];

function createFilter($key, $value)
{
    return fn($item) => $item[$key] === $value;
}

$isAdmin = createFilter('role', 'admin');

$admins = array_filter($users, $isAdmin);

print_r($admins);

$filter = array_filter($users, fn($item) => $item['name'] === 'Bob');


echo '<br>';

print_r($filter);
