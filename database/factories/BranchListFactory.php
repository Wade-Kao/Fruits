<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BranchList;
use Faker\Generator as Faker;

$factory->define(BranchList::class, function (Faker $faker) {
    return [
        //
        'Bname' => $faker->address,
    ];
});
