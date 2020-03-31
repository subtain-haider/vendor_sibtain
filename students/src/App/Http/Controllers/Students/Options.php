<?php

namespace Sibtain\Students\App\Http\Controllers\Students;

use Sibtain\Students\App\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use LaravelEnso\Select\App\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected string $model = Student::class;

    //protected $queryAttributes = ['name'];

    //public function query(Request $request)
    //{
    //    return Student::query();
    //}
}
