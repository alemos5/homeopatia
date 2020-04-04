<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\EstudiosRemedios;
use Faker\Generator as Faker;

$factory->define(EstudiosRemedios::class, function (Faker $faker) {

    return [
        'estudio_id' => $faker->randomDigitNotNull,
        'medicamento' => $faker->word,
        'medicamento_id' => $faker->randomDigitNotNull,
        'sac' => $faker->randomDigitNotNull,
        'reino' => $faker->word,
        'clave' => $faker->word,
        'nota' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
