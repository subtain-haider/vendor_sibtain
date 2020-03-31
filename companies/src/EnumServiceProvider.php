<?php

namespace Sibtain\Companies;

use Sibtain\Companies\App\Enums\CompanyStatuses;
use LaravelEnso\Enums\EnumServiceProvider as ServiceProvider;

class EnumServiceProvider extends ServiceProvider
{
    public $register = [
        'companyStatuses' => CompanyStatuses::class,
    ];
}
