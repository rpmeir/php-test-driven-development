<?php

namespace App;

abstract class Money
{
    protected float $amount;
    protected string $currency;

    public function __construct(float $number, string $currency)
    {
        $this->amount = $number;
        $this->currency = $currency;
    }

    public function equals(Money $other): bool
    {
        if ($this != $other) {
            return false;
        }
        return $this->amount == $other->amount;
    }

    public static function dollar(float $number): Dollar
    {
        return new Dollar($number, 'USD');
    }

    public static function euro(float $number): Euro
    {
        return new Euro($number, 'EUR');
    }

    public function currency(): string
    {
        return $this->currency;
    }

    abstract public function times(float $number): Money;
}
