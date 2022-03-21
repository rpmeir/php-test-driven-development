<?php

namespace Tests;

use App\Dollar;

test(
    'Deve retornar 10 quando multiplicar 5 por 2', function () {
        $five = new Dollar(5);
        $five->times(2);
        expect($five->amount)->toEqual(10);
    }
);
