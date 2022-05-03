<?php

namespace App;

use Exception;

class Money implements Expression
{
    private float $amount;
    private string $currency;

    public function __construct(float $number, string $currency)
    {
        $this->amount = $number;
        $this->currency = $currency;
    }

    public function equals(Money $other): bool
    {
        if ($this->currency != $other->currency) {
            return false;
        }
        return $this->amount == $other->amount;
    }

    public static function dollar(float $number): Money
    {
        return new Money($number, 'USD');
    }

    public static function euro(float $number): Money
    {
        return new Money($number, 'EUR');
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function times(float $number): Money
    {
        return new Money($this->amount * $number, $this->currency);
    }

    public function plus(Money $addend): Expression
    {
        if ($this->currency() != $addend->currency()) {
            throw new Exception('Different money currency');
        }
        return new Sum($this, $addend);
    }

    public function reduce(Bank $bank, string $to): Money {
        $rate = $bank->rate($this->currency, $to);
        return new Money($this->amount / $rate, $to);
    }

    public function amount(): float
    {
        return $this->amount;
    }
}
