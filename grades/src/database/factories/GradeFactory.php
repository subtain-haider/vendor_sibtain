<?php

use Faker\Generator as Faker;
use LaravelEnso\Companies\App\Models\Company;
use Sibtain\Grades\App\Grade;

$factory->define(Grade::class, fn (Faker $faker) => [
    'company_id' => Company::all()->random()->id,
    'name' => $faker->unique()->name,
    'abbreviation' => $faker->ean8,
]);
