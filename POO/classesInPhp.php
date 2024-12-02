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


class BankAccount
{
    private float $balance = 0;

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }

    public function withdraw(float $amount): void
    {
        if ($amount > $this->balance) {
            throw new Exception("Insufficient funds");
        }

        $this->balance -= $amount;
    }
}


$account = new BankAccount();

echo $account->getBalance() . PHP_EOL;
