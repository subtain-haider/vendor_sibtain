<?php

namespace Sibtain\Students\App\Http\Controllers\Students;

use Sibtain\Students\App\Tables\Builders\StudentTable;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\App\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected string $tableClass = StudentTable::class;
}
