<?php

declare(strict_types=1);

$numbers = [1, 2, 3, 4, 5];

$multiplier = 3;


$squared = array_map(fn($num) => $num * $num, $numbers);

$multiplyBy3 = array_map(fn($num) => $num * $multiplier, $numbers);
