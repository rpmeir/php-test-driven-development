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

    public static function dollar(float $number): Dollar
    {
        return new Dollar($number);
    }

    public static function euro(float $number): Euro
    {
        return new Euro($number);
    }
}
