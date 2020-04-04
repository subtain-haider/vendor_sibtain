<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Classroom;

use Illuminate\Routing\Controller;
use Sibtain\Classrooms\App\Models\Classroom;
use LaravelEnso\Select\App\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = Classroom::class;

    protected $queryAttributes = ['name'];
}
