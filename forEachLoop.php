<?php

$basket = [
    'Apple' => 3,
    'Banana' => 5,
];

$total = 0;

foreach ($basket as $fruta => $valor):
    $total += $valor;
endforeach;


echo $total . PHP_EOL;
