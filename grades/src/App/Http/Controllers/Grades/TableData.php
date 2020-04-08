<?php

namespace Sibtain\Grades\App\Http\Controllers\Grades;

use Sibtain\Grades\App\Tables\Builders\GradeTable;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\App\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected string $tableClass = GradeTable::class;
}
