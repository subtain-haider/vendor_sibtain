<?php

namespace Sibtain\Companies;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Sibtain\Companies\App\Models\Company;
use Sibtain\Companies\App\Policies\Company as Policy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Company::class => Policy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
