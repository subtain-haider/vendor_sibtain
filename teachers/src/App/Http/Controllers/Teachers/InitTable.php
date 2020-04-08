<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teachers;

use Sibtain\Teachers\App\Tables\Builders\TeacherTable;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\App\Traits\Init;

class InitTable extends Controller
{
    use Init;

    protected string $tableClass = TeacherTable::class;
}
