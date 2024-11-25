<?php

echo 'Rocket launch countdown' . PHP_EOL;

for ($i = 10; $i >= 1; $i--) {
    echo  $i . PHP_EOL;
    if ($i == 1) echo 'Rocket off!' . PHP_EOL;
    sleep(1);
}
