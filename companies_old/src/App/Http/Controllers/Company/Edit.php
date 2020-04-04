<?php

namespace Sibtain\Companies\App\Http\Controllers\Company;

use Illuminate\Routing\Controller;
use Sibtain\Companies\App\Forms\Builders\CompanyForm;
use Sibtain\Companies\App\Models\Company;

class Edit extends Controller
{
    public function __invoke(Company $company, CompanyForm $form)
    {
        return ['form' => $form->edit($company)];
    }
}
