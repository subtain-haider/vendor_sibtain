<?php

namespace Sibtain\Students\App\Http\Controllers\Students;

use Sibtain\Students\App\Tables\Builders\StudentTable;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\App\Traits\Init;

class InitTable extends Controller
{
    use Init;

    protected string $tableClass = StudentTable::class;
}
