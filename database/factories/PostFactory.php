<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [

        'Title' => $faker->sentence,
        'Body' => $faker->text,
        'Image' => 'posts/images/img.jpg',
        'Views' => random_int(10,200),
        'Shares' => random_int(10,150),
        'author_email' => $faker->unique()->email,
        'category_id' => $faker->numberBetween(1,15),
        'user_id' => $faker->numberBetween(1,15)

    ];
});
