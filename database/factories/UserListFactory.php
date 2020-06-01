<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ListUser;
use Faker\Generator as Faker;

$factory->define(ListUser::class, function (Faker $faker) {
    return [
        'UId' => $faker->username,
        'UName' => $faker->name,
        'UPassword' => $faker->password,
        'UPhone' => $faker->phoneNumber,
        'UAddress' => $faker->address,
        'ULevel' => 'user',
        'ULock' => true,

    ];
});
