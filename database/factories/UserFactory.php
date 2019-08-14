<?php

use Faker\Generator as Faker;
use App\User;
$factory->define(User::class, function (Faker $faker) {
    return [
        'profession_id'=>rand(1,6),
        'name' => $faker->name,
        'surname'=>$faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'telephone'=>$faker->unique()->postcode,
        'is_admin'=>rand(1,0),
        'is_active'=>rand(1,0),
        'password' => bcrypt('laravel'),
        'remember_token' => str_random(10),
    ];
});
