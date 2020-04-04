<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Classroom;

use Illuminate\Routing\Controller;
use Sibtain\Classrooms\App\Tables\Builders\ClassroomTable;
use LaravelEnso\Tables\App\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected $tableClass = ClassroomTable::class;
}
