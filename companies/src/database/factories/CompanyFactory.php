<?php

use Faker\Generator as Faker;
use Sibtain\Companies\App\Enums\CompanyStatuses;
use Sibtain\Companies\App\Models\Company;

$factory->define(Company::class, fn (Faker $faker) => [
    'name' => $faker->unique()->company,
    'code' => $faker->ean8,
    'email' => $faker->email,
    'phone' => $faker->phoneNumber,
    'is_tenant' => true,
    'status' => CompanyStatuses::Active,
]);
