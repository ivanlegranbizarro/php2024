<?php

$status = 404;


$message = match ($status) {
    200, 300 => 'OK',
    404 => 'Not Found',
    500 => 'Internal Server Error',
    default => 'Unknown Error',
};


echo $message . PHP_EOL;
