<?php

declare(strict_types=1);

function sum(int ...$numbers): int
{
    $total = 0;
    foreach ($numbers as $num) {
        $total += $num;
    }

    return $total;
}


function introduceTeam($teamName, string ...$members)
{
    echo "Team: $teamName" . PHP_EOL;
    echo "Members: " . implode(", ", $members);
}
