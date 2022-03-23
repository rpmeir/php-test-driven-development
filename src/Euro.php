<?php

namespace App;

class Euro
{
    private float $amount;

    public function __construct(float $number)
    {
        $this->amount = $number;
    }

    public function times(float $number): Euro
    {
        return new Euro($this->amount * $number);
    }

    public function equals(Euro $other): bool
    {
        return $this->amount === $other->amount;
    }
}
