<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\House::class, function (Faker $faker){
    return [
        'type' => $faker->word,
        'description' => $faker->paragraph,
        'price' => $faker->randomNumber(3),
        'location'  => $faker->word,
        'bathroom'  =>$faker->boolean,
        'toilet'    => $faker->boolean,
        'kitchen'   => $faker->boolean,
        'rooms'     => $faker->numberBetween(5,20),
        'status'    => 1
    ];
});
