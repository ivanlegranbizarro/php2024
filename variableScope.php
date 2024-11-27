<?php

declare(strict_types=1);

$superHero = 'Batman';


function revealIdentity(string $hero): void
{
    echo "$hero real name is Bruce Wayne" . PHP_EOL;
}


revealIdentity($superHero);


function countVisitors()
{
    static $visitorCount = 0;
    $visitorCount++;

    echo "We have $visitorCount visitors" . PHP_EOL;
}
