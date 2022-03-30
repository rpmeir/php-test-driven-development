<?php

namespace Tests;

use App\Bank;
use App\Money;

test(
    'Deve multiplicar corretamente o Money',
    function () {
        $five = Money::dollar(5);
        $ten = $five->times(2);
        $fiften = $five->times(3);
        expect($ten->equals(Money::dollar(10)))->toBeTruthy();
        expect($fiften->equals(Money::dollar(15)))->toBeTruthy();
    }
);

test(
    'Deve retornar true quando o money com mesmo valor e tipo são comparados',
    function () {
        $fiveDollars = Money::dollar(5);
        expect($fiveDollars->equals(Money::dollar(5)))->toBeTruthy();
        expect($fiveDollars->equals(Money::dollar(6)))->toBeFalsy();
        $fiveEuros = Money::euro(5);
        expect($fiveDollars->equals($fiveEuros))->toBeFalsy();
    }
);

test(
    'Deve certificar o tipo correto de moeda',
    function () {
        $dollar = Money::dollar(1);
        expect($dollar->currency())->toEqual('USD');
        $euro = Money::euro(1);
        expect($euro->currency())->toEqual('EUR');
    }
);

test(
    'Deve efetuar a soma de mesmas moeda',
    function () {
        $dollar = Money::dollar(5);
        $sum = $dollar->plus($dollar);
        $bank = new Bank();
        $reduced = $bank->reduce($sum, 'USD');
        expect($reduced)->toEqual(Money::dollar(10))->toBeTruthy();
    }
);
