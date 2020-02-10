<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Hostelry\Business\Entities\Business;
use Illuminate\Support\Str;

$factory->define(Business::class, function (Faker $faker) {

    $name = $faker->company;

    return [
        'name' => $name,
        'slug' => Str::slug($name),
    ];
});
