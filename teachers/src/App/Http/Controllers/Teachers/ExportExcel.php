<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teachers;

use Sibtain\Teachers\App\Tables\Builders\TeacherTable;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\App\Traits\Excel;

class ExportExcel extends Controller
{
    use Excel;

    protected string $tableClass = TeacherTable::class;
}
