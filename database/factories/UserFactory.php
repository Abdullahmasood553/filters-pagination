<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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


$factory->define(User::class, function (Faker $faker) {
    $user_types = [\App\Constants\GlobalConstants::USER_TYPE_FRONTEND,\App\Constants\GlobalConstants::USER_TYPE_BACKEND];
    $randomType = array_rand(array_flip($user_types));
    return [
        'fname' => $faker->name,
        'lname' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'type' => $randomType,
        'country' => $faker->country,
        'salary' => $faker->unique()->numberBetween($min = 1000, $max = 500000),
        'address' => $faker->address,
        'password' => Hash::make('123456'),
        'social_photo' => $faker->imageUrl($width = 200, $height = 200), 
        'remember_token' => Str::random(10),
    ];
});