<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Hostelry\User\Entities\Owner;
use Illuminate\Support\Str;

$factory->define(Owner::class, function (Faker $faker) {
    return [
        'code' => $faker->uuid,
        'username' => $faker->email,
        'first_name' => $faker->firstName,
        'middle_name' => $faker->lastName,
        'last_name' => $faker->lastName,
        'activation_code' => Str::random(32),
    ];
});
