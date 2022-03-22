<?php

namespace App;

class Dollar
{
    private float $amount;

    public function __construct(float $number)
    {
        $this->amount = $number;
    }

    public function times(float $number): Dollar
    {
        return new Dollar($this->amount * $number);
    }

    public function equals(Dollar $other): bool
    {
        return $this->amount === $other->amount;
    }
}
