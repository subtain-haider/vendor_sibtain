<?php

namespace Sibtain\Companies\App\Http\Controllers\Person;

use Illuminate\Routing\Controller;
use Sibtain\Companies\App\Forms\Builders\PersonForm;
use Sibtain\Companies\App\Models\Company;

class Create extends Controller
{
    public function __invoke(Company $company, PersonForm $form)
    {
        return ['form' => $form->create($company)];
    }
}
