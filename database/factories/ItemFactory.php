<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->name,
        'price' => $faker->numberBetween($min = 100, $max = 900),
        'size' => $faker->word,
        'enabled' => $faker->boolean,
        'pic' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
