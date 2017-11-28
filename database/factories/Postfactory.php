<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $user = \App\User::inRandomOrder()->first();
    return [
        'title' => $faker->words(6, true),
        'body' => $faker->paragraphs(3,true),
        'user_id' => $user->id
    ];
});
