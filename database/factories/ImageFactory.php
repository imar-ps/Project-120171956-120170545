<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Image::class, function (Faker $faker) {

    $imageable = [
        \App\User::class,
        \App\Post::class
    ];

    $imageabletype = $faker-> randomElement($imageable);

    $imageable = factory($imageabletype)->create();

    return [
        'url' => $faker->url.'image.jpg',
        'imageable_type' => $imageabletype,
        'imageable_id' => $imageable -> id
    ];
});
