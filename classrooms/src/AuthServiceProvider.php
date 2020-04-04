<?php

namespace Sibtain\Classrooms;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Sibtain\Classrooms\App\Models\Classroom;
use Sibtain\Classrooms\App\Policies\Classroom as Policy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Classroom::class => Policy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
