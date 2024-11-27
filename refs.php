<?php

declare(strict_types=1);

$person = 'John';

$client = &$person;

$person = 'John';

$client = $person;
