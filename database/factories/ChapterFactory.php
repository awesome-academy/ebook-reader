<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Chapter::class, function (Faker $faker) {
    return [
        'title' => $faker->text(100),
        'slug' => $faker->slug,
        'content' => $faker->paragraph(20, true),
    ];
});
