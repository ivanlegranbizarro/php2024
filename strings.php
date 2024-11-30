<?php

declare(strict_types=1);

$name = 'Iván';

echo "Hello, $name\n";

// String manipulation

echo $name[0] . PHP_EOL;

echo $name[-1] . PHP_EOL;

echo substr($name, 0, 2) . PHP_EOL;


$greeting = 'Hello ' . $name;
$greeting .= ', how are you?';


// Search trough text

$haystack = 'The quick brown fox';
$pos = strpos($haystack, 'quick') . PHP_EOL;

$haystackModify = str_replace('quick', 'lazy', $haystack);

echo $pos . PHP_EOL;

echo $haystackModify . PHP_EOL;

echo preg_match_all('/\w{5}/', $haystack, $matches) . PHP_EOL;

// String formatting

$nameOfThatWoman = 'Alice';
$ageOfThatWoman = 30;


printf('The woman is %s and is %d years old', $nameOfThatWoman, $ageOfThatWoman);

echo PHP_EOL;

$csv = 'apple,banana,cherry';

$fruits = explode(',', $csv);


print_r($fruits);

$padded = str_pad('Hello', 10, '-', STR_PAD_BOTH);

echo $padded . PHP_EOL;

echo trim('     Hello, Marvin    ') . PHP_EOL;
