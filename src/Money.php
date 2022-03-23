<?php

namespace App;

class Money
{
    protected float $amount;

    public function __construct(float $number)
    {
        $this->amount = $number;
    }

    public function equals(Money $other): bool
    {
        return $this->amount === $other->amount;
    }

    public function times(float $number): Money
    {
        return new Money($this->amount * $number);
    }
}
