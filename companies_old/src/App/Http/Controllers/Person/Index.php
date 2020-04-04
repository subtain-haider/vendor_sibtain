<?php

namespace Sibtain\Companies\App\Http\Controllers\Person;

use Illuminate\Routing\Controller;
use Sibtain\Companies\App\Http\Resources\Person as Resource;
use Sibtain\Companies\App\Models\Company;

class Index extends Controller
{
    public function __invoke(Company $company)
    {
        return Resource::collection($company->people);
    }
}
