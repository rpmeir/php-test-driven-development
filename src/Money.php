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
        if ($this != $other) {
            return false;
        }
        return $this->amount == $other->amount;
    }
}