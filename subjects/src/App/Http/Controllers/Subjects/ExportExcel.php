<?php

namespace Sibtain\Subjects\App\Http\Controllers\Subjects;

use Sibtain\Subjects\App\Tables\Builders\SubjectTable;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\App\Traits\Excel;

class ExportExcel extends Controller
{
    use Excel;

    protected string $tableClass = SubjectTable::class;
}
