<?php

namespace App;

class Dollar
{
    public float $amount;

    public function __construct(float $number)
    {
        $this->amount = $number;
    }

    public function times(float $number): void
    {
        $this->amount *= $number;
    }
}
