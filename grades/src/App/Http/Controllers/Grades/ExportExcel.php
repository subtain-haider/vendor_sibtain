<?php

namespace Sibtain\Grades\App\Http\Controllers\Grades;

use Sibtain\Grades\App\Tables\Builders\GradeTable;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\App\Traits\Excel;

class ExportExcel extends Controller
{
    use Excel;

    protected string $tableClass = GradeTable::class;
}
