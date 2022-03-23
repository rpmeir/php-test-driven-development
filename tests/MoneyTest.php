<?php

namespace Tests;

use App\Dollar;
use App\Euro;

test(
    'Deve retornar o valor multiplo de 5 para 2 e 3 em dolares',
    function () {
        $five = new Dollar(5);
        expect($five->times(2)->equals(new Dollar(10)))->toBeTruthy();
        expect($five->times(3)->equals(new Dollar(15)))->toBeTruthy();
    }
);

test(
    'Deve retornar o valor multiplo de 5 para 2 e 3 em euros',
    function () {
        $five = new Euro(5);
        expect($five->times(2)->equals(new Euro(10)))->toBeTruthy();
        expect($five->times(3)->equals(new Euro(15)))->toBeTruthy();
    }
);

test(
    'Deve retornar true quando dollars com mesmo valor são comparados',
    function () {
        $five = new Dollar(5);
        expect($five->equals(new Dollar(5)))->toBeTruthy();
        expect($five->equals(new Dollar(6)))->toBeFalsy();
        $five = new Euro(5);
        expect($five->equals(new Euro(5)))->toBeTruthy();
        expect($five->equals(new Euro(6)))->toBeFalsy();
    }
);
