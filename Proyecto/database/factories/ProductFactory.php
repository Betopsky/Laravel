<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        "title" => $faker->title,
	"description" => $faker->text,
	"price" => $faker->numberBetween(10, 90),
    ];
});
