<?php

declare(strict_types=1);

class Person
{
    public function __construct(
        public string $name,
        public int $age
    ) {}

    public function introduce(): string
    {
        return "Hello, my name is $this->name and I'm $this->age years old" . PHP_EOL;
    }
}


class Employee extends Person
{
    public function __construct(
        string $name,
        int $age,
        public string $jobPosition
    ) {
        parent::__construct($name, $age);
    }

    public function introduce(): string
    {
        return parent::introduce() . "I work as a $this->jobPosition" . PHP_EOL;
    }
}
