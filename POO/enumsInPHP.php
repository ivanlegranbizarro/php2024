<?php

declare(strict_types=1);

enum DaysOfWeek
{
    case MONDAY;
    case TUESDAY;
    case WEDNESDAY;
    case THURSDAY;
    case FRIDAY;
    case SATURDAY;
    case SUNDAY;
}

$today = DaysOfWeek::MONDAY;

if ($today === DaysOfWeek::MONDAY) {
    echo 'Today is Monday' . PHP_EOL;
}


enum Color: string
{
    case RED = '#FF0000';
    case GREEN = '#00FF00';
    case BLUE = '#0000FF';
    case YELLOW = '#FFFF00';
    case BLACK = '#000000';
}
