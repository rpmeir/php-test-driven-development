<?php

namespace App;

class Dollar extends Money
{
    public function __construct(float $number)
    {
        parent::__construct($number);
    }
}
