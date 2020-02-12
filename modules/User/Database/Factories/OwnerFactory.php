<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Hostelry\User\Entities\Owner;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

$factory->define(Owner::class, function (Faker $faker) {
    return [
        'code' => $faker->uuid,
        'username' => $faker->email,
        'password' => Hash::make('secret'),
        'first_name' => $faker->firstName,
        'middle_name' => $faker->lastName,
        'last_name' => $faker->lastName,
        'activation_code' => Str::random(32),
        'is_validated' => true,
        'api_token' => Str::random(32),
        'remember_token' => Str::random(32),
    ];
});
