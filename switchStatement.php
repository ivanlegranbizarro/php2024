<?php

$size = 'M';

switch ($size) {
    case 'S':
    case 'M':
        echo 'Small or Medium size' . PHP_EOL;
        break;
    case 'L':
        echo 'Large size' . PHP_EOL;
        break;
    default:
        echo 'Unknown size' . PHP_EOL;
}
