<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ClientesCreditos;
use Faker\Generator as Faker;

$factory->define(ClientesCreditos::class, function (Faker $faker) {

    return [
        'cliente_id' => $faker->randomDigitNotNull,
        'pricing_id' => $faker->randomDigitNotNull,
        'cantidad' => $faker->randomDigitNotNull,
        'tipo' => $faker->word,
        'costo' => $faker->word,
        'fecha' => $faker->word,
        'operacion' => $faker->word,
        'json' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
