<?php

namespace Sibtain\Classroom\App\Http\Controllers\Classroom;

use Sibtain\Classroom\App\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use LaravelEnso\Select\App\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected string $model = ClassRoom::class;

    //protected $queryAttributes = ['name'];

    //public function query(Request $request)
    //{
    //    return ClassRoom::query();
    //}
}
