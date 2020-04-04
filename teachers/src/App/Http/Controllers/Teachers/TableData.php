<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teachers;

use Sibtain\Teachers\App\Tables\Builders\StudentTable;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\App\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected string $tableClass = StudentTable::class;
}
