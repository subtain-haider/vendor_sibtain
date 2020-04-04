<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Classroom;

use Illuminate\Routing\Controller;
use Sibtain\Classrooms\App\Tables\Builders\ClassroomTable;
use LaravelEnso\Tables\App\Traits\Init;

class InitTable extends Controller
{
    use Init;

    protected $tableClass = ClassroomTable::class;
}
