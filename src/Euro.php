<?php

namespace App;

class Euro extends Money
{
    public function __construct(float $number, string $currency)
    {
        parent::__construct($number, $currency);
    }
}
