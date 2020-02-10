<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Classroom;
use Faker\Generator as Faker;

$factory->define(Classroom::class, function (Faker $faker) {

    return [
        'branch_id' => $faker->randomDigitNotNull,
        'name' => $faker->word,
        'week_day' => $faker->word,
        'schedule' => $faker->word,
        'size' => $faker->randomDigitNotNull,
        'isActive' => $faker->word,
        'isOpen' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
