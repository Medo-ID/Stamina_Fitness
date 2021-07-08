<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
// use Illuminate\Database\Eloquent\Factories\Factory;

use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;
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
        'username' => $faker->userName,
        'avatar' => $faker->imageUrl($width = 640, $height = 480),
        'dob' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'gender' => $faker->randomElement($array = array ('male','female')),
        'country' => $faker->country,
        'role' => $faker->randomElement($array = array ('admin','coach','user')),
        'status' => $faker->randomElement($array = array ('active','inactive')),
        'department' => Str::random(5),
        'company' => Str::random(5),
        'mobile' => $faker->phoneNumber,
        'website' => $faker-> url,
        'langauges_known' => $faker->randomElement($array = array ('English','Arabic'), $count=1),
        'contact_options' => Str::random(5),
        'location' =>Str::random(5),
        'social_links' =>Str::random(5),
        'permissions' =>Str::random(5),
        'is_verified' => $faker->boolean,
        'rule'=> Str::random(5),
    ];
});
