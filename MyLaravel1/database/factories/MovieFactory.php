<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movies;
use Faker\Generator as Faker;

$factory->define(Movies::class, function (Faker $faker) {
    return [
        'title' => $faker->firstname,
        'original_title' => $faker->lastname,
        'nationality' => $faker->word,
        'date' => $faker->date,
        'vote' => $faker->numberBetween(1, 10),
    ];
});
