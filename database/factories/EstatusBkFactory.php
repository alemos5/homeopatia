<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\EstatusBk;
use Faker\Generator as Faker;

$factory->define(EstatusBk::class, function (Faker $faker) {

    return [
        'estatus' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
