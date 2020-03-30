<?php

namespace Sibtain\Subjects\App\Http\Controllers\Subjects;

use Illuminate\Routing\Controller;
use Sibtain\Subjects\App\Forms\Builders\SubjectForm;

class Create extends Controller
{
    public function __invoke(SubjectForm $form)
    {
        return ['form' => $form->create()];
    }
}
