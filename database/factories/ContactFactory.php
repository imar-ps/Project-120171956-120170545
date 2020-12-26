<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [

        'Name' => $faker->name,
        'Email' => $faker->unique()->email,
        'Subject' => $faker->sentence,
        'Message' => $faker->sentence,
        'ip' => $faker->ipv4

    ];
});
