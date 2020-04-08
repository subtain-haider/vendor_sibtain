<?php

use Faker\Generator as Faker;
use LaravelEnso\Companies\App\Models\Company;
use Sibtain\Students\App\Student;
use Sibtain\Classrooms\App\Models\Classroom;


$factory->define(Student::class, function (Faker $faker) {
    $company = Company::all()->random()->id;

    return [
        'name' => $faker->name,
        'cnic' => $faker->isbn10,
        'phone' => $faker->e164PhoneNumber,
        'email' => $faker->email,
        'father_name' => $faker->name,
        'father_cnic' => $faker->isbn10,
        'father_phone' => $faker->e164PhoneNumber,
        'father_email' => $faker->email,
        'address' => $faker->address,
        'city' => $faker->city,
        'company_id' => $company,
        'classroom_id' => Classroom::where('company_id',$company)->get()->random()->id,
        'gender' => random_int(0,3),
        'status' => 1,
        'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
