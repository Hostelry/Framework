<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Hostelry\User\Entities\Employee;
use Illuminate\Support\Facades\Hash;
use Hostelry\Business\Entities\Branch;
use Illuminate\Support\Str;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'username' => $faker->userName,
        'password' => Hash::make('secret'),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'branch_id' => random_int(1, Branch::count()),
        'remember_token' => Str::random(32),
        'api_token' => Str::random(32),
    ];
});
