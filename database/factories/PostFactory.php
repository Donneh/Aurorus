<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Post::class, function(Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'body' => $faker->paragraph(rand(3, 8)),
        'user_id' => rand(1, 49),
        'views' => rand(1, 1000)
    ];
});