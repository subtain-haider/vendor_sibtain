<?php

namespace Sibtain\Companies\App\Http\Controllers\Company;

use Illuminate\Routing\Controller;
use Sibtain\Companies\App\Models\Company;
use LaravelEnso\Select\App\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = Company::class;

    protected $queryAttributes = ['name',  'phone'];
}
