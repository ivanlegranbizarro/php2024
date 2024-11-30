<?php

declare(strict_types=1);


$simpleArray = [1, 2, 3, 4, 5];

$associativeArray = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
];


echo $simpleArray[0] . PHP_EOL;
echo $associativeArray['name'] . PHP_EOL;

// Add elements to array

$simpleArray[] = 6;

$associativeArray['country'] = 'USA';


// Multidimensional arrays

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
];

echo $matrix[1][1] . PHP_EOL;


// Array's functions

$fruits = ['grape', 'orange', 'banana', 'apple'];

sort($fruits);

echo implode(', ', $fruits) . PHP_EOL;

// Sort $associativeArray

asort($associativeArray);

echo implode(', ', $associativeArray) . PHP_EOL;


ksort($associativeArray);

echo implode(', ', $associativeArray) . PHP_EOL;


$numbers = range(1, 10);

$squared = array_map(fn($n) => $n ** 2, $numbers);


$evenNumbers = array_filter($numbers, fn($n) => $n % 2 == 0);

// Array reduce: Sirve para reducir un array a un valor


$sum = array_reduce(
    $numbers,
    fn($carry, $n) => $carry + $n,
    0
);

echo $sum . PHP_EOL;

$moreNumbers = [0, ...$numbers, 11];


print_r($moreNumbers);
