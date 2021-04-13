<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->sentence(5),
        'image' => "https://placeimg.com/150/100/tech",
        'price' => rand(10, 100)
    ];
});
