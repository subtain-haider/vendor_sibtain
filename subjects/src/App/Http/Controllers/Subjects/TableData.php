<?php

namespace Sibtain\Subjects\App\Http\Controllers\Subjects;

use Sibtain\Subjects\App\Tables\Builders\SubjectTable;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\App\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected string $tableClass = SubjectTable::class;
}
