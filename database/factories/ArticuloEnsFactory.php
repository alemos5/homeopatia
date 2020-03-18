<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ArticuloEns;
use Faker\Generator as Faker;

$factory->define(ArticuloEns::class, function (Faker $faker) {

    return [
        'language_id' => $faker->randomDigitNotNull,
        'reference_id' => $faker->randomDigitNotNull,
        'reference_table' => $faker->word,
        'reference_field' => $faker->word,
        'value' => $faker->text,
        'original_value' => $faker->word,
        'original_text' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
