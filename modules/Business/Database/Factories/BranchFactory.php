<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Hostelry\Business\Entities\Branch;
use Illuminate\Support\Str;

$factory->define(Branch::class, function (Faker $faker) {

    $name = $faker->company;

    return [
        'code' => Str::uuid()->toString(),
        'name' => $name,
        'slug' => Str::slug($name),
        'business_id' => 1,
    ];
});
