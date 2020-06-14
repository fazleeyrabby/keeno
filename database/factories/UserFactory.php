<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Products;
use App\Categories;
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
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Products::class, function (Faker $faker) {
    return [
        'title' => $faker->words(3, true), 
       	'description' => $faker->realText(200),
        'images_url' => $faker->imageUrl(),
        'category_id' => random_int(1, 10),
        'is_featured' => $faker->text(5),
        'price' => $faker->randomFloat(5, 10, 100000),
        'rating' => $faker->randomDigit(1,5),
    ];
});

$factory->define(Categories::class, function (Faker $faker) {
    return [
        'name' => $faker->realText(32),
        'image_url' => $faker->imageUrl(),   
        // 'image_url' => url("/images/{$faker->image('public/',640,480, null, false)}") 
    ];
});
