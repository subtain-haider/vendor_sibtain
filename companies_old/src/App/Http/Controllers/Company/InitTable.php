<?php

namespace Sibtain\Companies\App\Http\Controllers\Company;

use Illuminate\Routing\Controller;
use Sibtain\Companies\App\Tables\Builders\CompanyTable;
use LaravelEnso\Tables\App\Traits\Init;

class InitTable extends Controller
{
    use Init;

    protected $tableClass = CompanyTable::class;
}
