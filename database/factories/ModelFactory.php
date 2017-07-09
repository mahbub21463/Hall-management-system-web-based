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
        'user_name' => str_random(10),
        
        'password' => bcrypt(str_random(10)),
        'created_at' => $faker->dateTimeBetween('-1 month','+3 days')];
});
