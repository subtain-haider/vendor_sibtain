<?php

use Faker\Generator as Faker;
use LaravelEnso\Companies\App\Models\Company;
use Sibtain\Teachers\App\Teacher;

$factory->define(Teacher::class, fn (Faker $faker) => [
    'name' => $faker->name,
    'cnic' => $faker->isbn10,
    'phone_number' => $faker->e164PhoneNumber,
    'email' => $faker->email,
    'qualification' => $faker->word,
    'company_id' => Company::all()->random()->id,
    'status' => 1,
    'joining_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
]);
