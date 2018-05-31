<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'person_id' => $faker->numberBetween($min = 1, $max = 10),
        'title' => $faker->jobTitle,
        'due' => $faker->dateTime
    ];
});
