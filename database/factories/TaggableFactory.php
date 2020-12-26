<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Taggable;
use Faker\Generator as Faker;

$factory->define(Taggable::class, function (Faker $faker) {

    $taggables = [
        \App\Post::class,
        \App\Video::class
    ];

    $taggabletype = $faker-> randomElement($taggables);

    $taggable = factory($taggabletype)->create();

    return [
        'tag_id' => \App\Tag::all()->random()->id,
        'taggable_id' => $taggable -> id,
        'taggable_type' => $taggabletype
    ];
});
