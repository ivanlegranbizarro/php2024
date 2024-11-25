<?php

declare(strict_types=1);

do {
    $dice = rand(1, 6);
    echo $dice . PHP_EOL;
} while (readline('Roll again? (y/n): ') === 'y');
