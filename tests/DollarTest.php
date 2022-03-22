<?php

namespace Tests;

use App\Dollar;

test(
    'Deve retornar 10 quando multiplicar 5 por 2',
    function () {
        $five = new Dollar(5);
        $product = $five->times(2);
        expect($product->amount)->toEqual(10);
        $product = $five->times(3);
        expect($product->amount)->toEqual(15);
    }
);

test(
    'Deve retornar true quando dollars com mesmo valor são comparados',
    function () {
        $five = new Dollar(5);
        expect($five->equals(new Dollar(5)))->toBeTruthy();
        expect($five->equals(new Dollar(6)))->toBeFalsy();
    }
);
