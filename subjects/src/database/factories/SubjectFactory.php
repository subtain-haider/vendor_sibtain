<?php

use Faker\Generator as Faker;
use Sibtain\Subjects\App\Subject;

$factory->define(Subject::class, fn (Faker $faker) => [
    'code' => $faker->word,
    'name' => $faker->word,
]);
