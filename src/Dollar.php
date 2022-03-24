<?php

namespace App;

class Dollar extends Money
{
    public function __construct(float $number)
    {
        parent::__construct($number);
    }

    public function times(float $number): Dollar
    {
        return new Dollar($this->amount * $number);
    }
}
