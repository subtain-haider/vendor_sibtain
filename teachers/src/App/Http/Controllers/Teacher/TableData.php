<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teacher;

use Sibtain\Teachers\App\Tables\Builders\TeacherTable;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\App\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected string $tableClass = TeacherTable::class;
}
