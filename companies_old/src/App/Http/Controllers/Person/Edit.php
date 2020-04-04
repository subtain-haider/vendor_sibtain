<?php

namespace Sibtain\Companies\App\Http\Controllers\Person;

use Illuminate\Routing\Controller;
use Sibtain\Companies\App\Forms\Builders\PersonForm;
use Sibtain\Companies\App\Models\Company;
use LaravelEnso\People\App\Models\Person;

class Edit extends Controller
{
    public function __invoke(Company $company, Person $person, PersonForm $form)
    {
        return ['form' => $form->company($company)->edit($person)];
    }
}
