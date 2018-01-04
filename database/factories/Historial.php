<?php

use App\HistorialEjercicio;
use Faker\Generator as Faker;

$factory->define(HistorialEjercicio::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'ejercicio_id' => rand(1, 5),
    ];
});
