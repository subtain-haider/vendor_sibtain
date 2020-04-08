<?php

namespace Sibtain\Grades\App\Http\Controllers\Grades;

use Sibtain\Grades\App\Grade;
use Illuminate\Routing\Controller;
use LaravelEnso\Select\App\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

//    protected string $model = Grade::class;

//    protected $queryAttributes = ['id','name'];

    public function query()
    {
        return Grade::visible();
    }
}
