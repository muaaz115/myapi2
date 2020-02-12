<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        //
           'name' => $faker->word,
           'details' => $faker->paragraph,
           'price' => $faker->numberBetween(20, 50)

    ];
});
