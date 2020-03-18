<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Articulos;
use Faker\Generator as Faker;

$factory->define(Articulos::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'alias' => $faker->word,
        'title_alias' => $faker->word,
        'introtext' => $faker->text,
        'fulltext' => $faker->text,
        'state' => $faker->word,
        'sectionid' => $faker->randomDigitNotNull,
        'mask' => $faker->randomDigitNotNull,
        'catid' => $faker->randomDigitNotNull,
        'created_by' => $faker->randomDigitNotNull,
        'created_by_alias' => $faker->word,
        'modified_by' => $faker->randomDigitNotNull,
        'checked_out' => $faker->randomDigitNotNull,
        'images' => $faker->text,
        'urls' => $faker->text,
        'attribs' => $faker->text,
        'version' => $faker->randomDigitNotNull,
        'parentid' => $faker->randomDigitNotNull,
        'ordering' => $faker->randomDigitNotNull,
        'metakey' => $faker->text,
        'metadesc' => $faker->text,
        'access' => $faker->randomDigitNotNull,
        'hits' => $faker->randomDigitNotNull,
        'metadata' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
