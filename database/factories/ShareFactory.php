<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Share;
use Faker\Generator as Faker;

$factory->define(Share::class, function (Faker $faker) {

    $shareables = [
        \App\Post::class,
        \App\Video::class
    ];

    $shareabletype = $faker-> randomElement($shareables);

    $shareable = factory($shareabletype)->create();

    return [
        'url' => $faker->url,
        'shareable_type' => $shareabletype,
        'shareable_id' => $shareable -> id
    ];
});
