<?php

declare(strict_types=1);


function countDown(int $start): array
{
    $result = [];
    for ($i = $start; $i > 0; $i--) {
        echo 'Generating number...' . PHP_EOL;
        $result[] = $i;
    }

    return $result;
}



function countDownWithGenerator(int $start): Generator
{
    for ($i = $start; $i > 0; $i--) {
        echo 'Generating number...' . PHP_EOL;
        yield $i;
    }
}



foreach (countDownWithGenerator(10) as $number) {
    echo $number . PHP_EOL;
}
