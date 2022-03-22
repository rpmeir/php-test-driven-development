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
