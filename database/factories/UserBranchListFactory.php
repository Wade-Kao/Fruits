<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BranchListUser;
use Faker\Generator as Faker;

$factory->define(BranchListUser::class, function (Faker $faker) {
    return [

        'list_branchs_id' => $faker->numberBetween($min = 10, $max = 20),
        'list_users_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
