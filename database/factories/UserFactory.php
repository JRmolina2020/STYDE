<?php

use Faker\Generator as Faker;
use App\User;
$factory->define(User::class, function (Faker $faker) {
    return [
        'profession_id'=>rand(1,6),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('laravel'),
        'remember_token' => str_random(10),
    ];
});
