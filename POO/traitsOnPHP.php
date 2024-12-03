<?php

declare(strict_types=1);

trait Logger
{
    public function log(string $message): void
    {
        echo "Logging: $message" . PHP_EOL;
    }
}

class User
{
    use Logger;
    public function __construct(public string $name) {}

    public function save(): void
    {
        $this->log("Saving user {$this->name}");
    }
}

$user = new User('Román');

$user->save();
