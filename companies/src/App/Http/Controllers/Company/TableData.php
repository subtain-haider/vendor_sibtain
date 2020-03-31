<?php

namespace Sibtain\Companies\App\Http\Controllers\Company;

use Illuminate\Routing\Controller;
use Sibtain\Companies\App\Tables\Builders\CompanyTable;
use LaravelEnso\Tables\App\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected $tableClass = CompanyTable::class;
}
