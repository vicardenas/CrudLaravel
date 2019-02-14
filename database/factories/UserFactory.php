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

$factory->define(App\Model\User::class, function (Faker $faker) {
    $gender = $faker->randomElement(['male', 'female']);
    $first_name = $faker->firstName($gender);
    $last_name = $faker->lastName;
    $user_name = str_replace('-', '.', str_slug("{$first_name} {$last_name}"));
    $domain = $faker->domainName;

    return [
        'dni'           => $faker->dni,
        'first_name'    => $first_name,
        'last_name'     => $last_name,
        'user_name'     => $user_name,
        'email'         => "{$user_name}@{$domain}",
        'password'      => bcrypt('123'),
        'phone'         => $faker->e164PhoneNumber,
        'mobile'        => $faker->e164PhoneNumber,
        'gender'        => $gender,
        'birth_date'    => $faker->date('Y/m/d', '-20years'),
        'remember_token' => str_random(10),
        'role'          => 'user',
    ];
});
