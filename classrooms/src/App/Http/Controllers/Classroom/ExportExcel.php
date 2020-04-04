<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Classroom;

use Illuminate\Routing\Controller;
use Sibtain\Classrooms\App\Tables\Builders\ClassroomTable;
use LaravelEnso\Tables\App\Traits\Excel;

class ExportExcel extends Controller
{
    use Excel;

    protected $tableClass = ClassroomTable::class;
}
