<?php

namespace Sibtain\Classroom\App\Http\Controllers\Classroom;

use Sibtain\Classroom\App\Tables\Builders\ClassRoomTable;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\App\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected string $tableClass = ClassRoomTable::class;
}
