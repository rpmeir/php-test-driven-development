<?php

namespace App;

class Euro extends Money
{
    public function __construct(float $number)
    {
        parent::__construct($number);
    }

    public function times(float $number): Euro
    {
        return new Euro($this->amount * $number);
    }
}
