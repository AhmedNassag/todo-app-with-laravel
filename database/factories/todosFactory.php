<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\todo;

$factory->define(todo::class, function (Faker $faker) {
    return [
        'title'       => $faker->sentence(3),
        'description' => $faker->text(100),
        'completed'   => false
    ];
});
