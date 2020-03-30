<?php

use Faker\Generator as Faker;
use Sibtain\Campuses\App\Campus;
use Sibtain\Subjects\App\Subject;
use Sibtain\Teachers\App\Teacher;

$factory->define(Teacher::class, fn (Faker $faker) => [
    'name' => $faker->name,
    'cnic' => $faker->isbn10,
    'phone_number' => $faker->e164PhoneNumber,
    'email' => $faker->email,
    'qualification' => $faker->word,
    'campus_id' => Campus::all()->random()->id,
    'status' => 1,
    'joining_date' => $faker->date($format = 'm-d-Y', $max = 'now'),
]);
