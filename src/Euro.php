<?php

namespace App;

class Euro extends Money
{
    public function __construct(float $number)
    {
        parent::__construct($number);
    }
}
