<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(\App\Comment::class, function (Faker $faker) {
    return [
        'post_id' => rand(1, 70),
        'user_id' => rand(1, 50),
        'body' => $faker->sentence()
    ];
});
