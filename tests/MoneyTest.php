<?php

namespace Tests;

use App\Dollar;
use App\Euro;

test(
    'Deve multiplicar corretamente os dolares',
    function () {
        $five = new Dollar(5);
        $ten = $five->times(2);
        $fiften = $five->times(3);
        expect($ten->equals(new Dollar(10)))->toBeTruthy();
        expect($fiften->equals(new Dollar(15)))->toBeTruthy();
    }
);

test(
    'Deve multiplicar corretamente os Euros',
    function () {
        $five = new Euro(5);
        $ten = $five->times(2);
        $fiften = $five->times(3);
        expect($ten->equals(new Euro(10)))->toBeTruthy();
        expect($fiften->equals(new Euro(15)))->toBeTruthy();
    }
);

test(
    'Deve retornar true quando o money com mesmo valor são comparados',
    function () {
        $fiveDollars = new Dollar(5);
        expect($fiveDollars->equals(new Dollar(5)))->toBeTruthy();
        expect($fiveDollars->equals(new Dollar(6)))->toBeFalsy();
        $fiveEuros = new Euro(5);
        expect($fiveEuros->equals(new Euro(5)))->toBeTruthy();
        expect($fiveEuros->equals(new Euro(6)))->toBeFalsy();
        expect($fiveDollars->equals($fiveEuros))->toBeFalsy();
    }
);
