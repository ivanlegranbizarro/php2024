<?php

declare(strict_types=1);


function factorial(int $number): int
{
    if ($number <= 1) {
        return 1;
    }

    return $number * factorial($number - 1);
}
