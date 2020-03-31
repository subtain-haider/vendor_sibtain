<?php

namespace Sibtain\Companies\App\Http\Controllers\Company;

use Illuminate\Routing\Controller;
use Sibtain\Companies\App\Forms\Builders\CompanyForm;

class Create extends Controller
{
    public function __invoke(CompanyForm $form)
    {
        return ['form' => $form->create()];
    }
}
