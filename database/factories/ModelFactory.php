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

$factory->define(FengHaung\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(FengHaung\Modality::class, function (Faker\Generator $faker) {
    $name = [
        ['Wing Chun', 'Wing Chun'], 
        ['Wudang Kung Fu', 'Kung Fu Wudang'],
        ['Shaolin Kung Fu', 'Kung Fu Shaolin'], 
        ['Meditation', 'Meditação'],
    ];

    $imagePath = $faker->image(storage_path().'/uploads/images', 400, 400, 'sports');

    return [
        'imageUrl' => 'images/cached/original/'.substr($imagePath, strpos($imagePath, '/images')+7),
        'en' => [
            'name' => $faker->randomElement($name)[0],
            'summary' => $faker->paragraph(2)
        ],
        'pt-BR' => [
            'name' => $faker->randomElement($name)[1],
            'summary' => $faker->paragraph(2)
        ],
    ];
});
