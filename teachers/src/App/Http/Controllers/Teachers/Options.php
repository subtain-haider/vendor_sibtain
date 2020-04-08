<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teachers;

use Sibtain\Teachers\App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use LaravelEnso\Select\App\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected string $model = Teacher::class;

    //protected $queryAttributes = ['name'];

    //public function query(Request $request)
    //{
    //    return Teacher::query();
    //}
}
