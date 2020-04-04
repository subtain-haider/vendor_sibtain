<?php

use Faker\Generator as Faker;
use LaravelEnso\Companies\App\Models\Company;
use Sibtain\Classrooms\App\Models\Classroom;

$factory->define(Classroom::class, fn (Faker $faker) => [
    'company_id' => Company::all()->random()->id,
    'name' => $faker->unique()->name,
    'abbreviation' => $faker->ean8,
]);
