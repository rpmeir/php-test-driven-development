<?php

namespace Tests;

use App\Money;

test(
    'Deve multiplicar corretamente os Dolares',
    function () {
        $five = Money::dollar(5);
        $ten = $five->times(2);
        $fiften = $five->times(3);
        expect($ten->equals(Money::dollar(10)))->toBeTruthy();
        expect($fiften->equals(Money::dollar(15)))->toBeTruthy();
    }
);

test(
    'Deve multiplicar corretamente os Euros',
    function () {
        $five = Money::euro(5);
        $ten = $five->times(2);
        $fiften = $five->times(3);
        expect($ten->equals(Money::euro(10)))->toBeTruthy();
        expect($fiften->equals(Money::euro(15)))->toBeTruthy();
    }
);

test(
    'Deve retornar true quando o money com mesmo valor e tipo são comparados',
    function () {
        $fiveDollars = Money::dollar(5);
        expect($fiveDollars->equals(Money::dollar(5)))->toBeTruthy();
        expect($fiveDollars->equals(Money::dollar(6)))->toBeFalsy();
        $fiveEuros = Money::euro(5);
        expect($fiveEuros->equals(Money::euro(5)))->toBeTruthy();
        expect($fiveEuros->equals(Money::euro(6)))->toBeFalsy();
        expect($fiveDollars->equals($fiveEuros))->toBeFalsy();
        $dollarMoney = new Money(5, 'USD');
        expect($dollarMoney->equals($fiveDollars))->toBeTruthy();
        $euroMoney = new Money(5, 'EUR');
        expect($euroMoney->equals($fiveEuros))->toBeTruthy();
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
