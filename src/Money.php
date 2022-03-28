<?php

namespace App;

use Exception;

class Money
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

    public function plus(Money $addend): Money
    {
        if ($this->currency() != $addend->currency()) {
            throw new Exception('Different money currency');
        }
        return new Money($this->amount + $addend->amount, $this->currency());
    }
}
