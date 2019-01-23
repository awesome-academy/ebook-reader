<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Meta::class, function (Faker $faker) {
    return [
        'name' => $faker->text(32),
        'slug' => $faker->slug,
        'type' => $faker->randomElement(['tag', 'category']),
    ];
});
