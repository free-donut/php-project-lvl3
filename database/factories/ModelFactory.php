<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

$factory->define(App\Url::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->url,
    ];
});

$factory->define(App\Domain::class, function (Faker\Generator $faker) {
    return [
        'url_adress' => $faker->url,
        'state' => 'created',
    ];
});
