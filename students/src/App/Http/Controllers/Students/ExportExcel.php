<?php

namespace Sibtain\Students\App\Http\Controllers\Students;

use Sibtain\Students\App\Tables\Builders\StudentTable;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\App\Traits\Excel;

class ExportExcel extends Controller
{
    use Excel;

    protected string $tableClass = StudentTable::class;
}
