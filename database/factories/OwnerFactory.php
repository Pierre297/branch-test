<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Owner;
use Faker\Generator as Faker;

$factory->define(Owner::class, function (Faker $faker) {
    return [
        'name' => $faker -> firstname(),
        'lastname' => $faker -> lastname(),
        'date' => $faker -> date(),
        'fiscal_code' => $faker -> unique() -> word(),
        'phone' => $faker -> unique() -> e164PhoneNumber(),
        'email' => $faker -> unique() -> email()
    ];
});
