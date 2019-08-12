<?php

use Faker\Generator as Faker;
use App\Profession;

$factory->define(Profession::class, function (Faker $faker) {
    return [
         'name'=>$faker->randomElement(['programador','diseñador','tester'
         ,'scrum master','analista','dba']),
    ];
});
