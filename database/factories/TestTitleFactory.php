<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
    ];
});

$factory->define(App\TestTable::class, function (Faker $faker) {
    return [
        'title' => $faker->name
    ];
});