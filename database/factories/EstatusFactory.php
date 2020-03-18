<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Estatus;
use Faker\Generator as Faker;

$factory->define(Estatus::class, function (Faker $faker) {

    return [
        'estatus' => $faker->word
    ];
});
