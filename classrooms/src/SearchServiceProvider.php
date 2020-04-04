<?php

namespace Sibtain\Classrooms;

use Sibtain\Classrooms\App\Models\Classroom;
use LaravelEnso\Searchable\SearchServiceProvider as ServiceProvider;

class SearchServiceProvider extends ServiceProvider
{
    public $register = [
        Classroom::class => [
            'group' => 'Company',
            'attributes' => ['name'],
            'label' => 'name',
            'permissionGroup' => 'administration.classrooms',
        ],
    ];
}
