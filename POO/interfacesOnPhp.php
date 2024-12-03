<?php

declare(strict_types=1);


interface PaymentProcessor
{
    public function processPayment(float $amount): bool;
    public function refundPayment(float $amount): bool;
}

abstract class OnlinePaymentProcessor implements PaymentProcessor
{
    public function __construct(
        protected string $apiKey
    ) {}

    abstract protected function validateApiKey(): bool;

    public function processPayment(float $amount): bool
    {
        if (!$this->validateApiKey()) {
            throw new Exception('Invalid API key');
        }

        return true;
    }

    public function refundPayment(float $amount): bool
    {
        if (!$this->validateApiKey()) {
            throw new Exception('Invalid API key');
        }

        return true;
    }
}

class StripeProcessor extends OnlinePaymentProcessor
{
    protected function validateApiKey(): bool
    {
        return strpos($this->apiKey, 'sk_') === 0;
    }
}

class PayPalProcessor extends OnlinePaymentProcessor
{
    protected function validateApiKey(): bool
    {
        return strlen($this->apiKey) === 32;
    }
}


$processor = new StripeProcessor('sk_435345');

$processor2 = new PayPalProcessor('12345678901234567890123456789012');


class CashPaymentProcessor implements PaymentProcessor
{
    public function processPayment(float $amount): bool
    {
        return true;
    }

    public function refundPayment(float $amount): bool
    {
        return true;
    }
}
