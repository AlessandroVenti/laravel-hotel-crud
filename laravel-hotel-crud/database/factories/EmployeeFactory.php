<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'firstname' => $faker -> firstName,
        'lastname' => $faker -> lastName,
        'role' => $faker -> numberBetween(1, 5),
        'ral' => $faker -> numberBetween(15000, 90000)
    ];
});
