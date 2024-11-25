<?php

$secret = 'magic';

$attempts = 0;

$maxAttempts = 5;

while ($attempts < $maxAttempts) {
    $guess = readline('Guess the password: ');
    $attempts++;

    if ($guess === $secret) {
        echo 'Correct! You have unlocked the secret treasure.' . PHP_EOL;
        break;
    } elseif ($attempts === $maxAttempts) {
        echo 'You have reached the maximum number of attempts. Game over.' . PHP_EOL;
    } else {
        echo 'Wrong. Try again. You have ' . ($maxAttempts - $attempts) . ' attempts left.' . PHP_EOL;
    }
}
