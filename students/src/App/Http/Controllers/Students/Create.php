<?php

namespace Sibtain\Students\App\Http\Controllers\Students;

use Illuminate\Routing\Controller;
use Sibtain\Students\App\Forms\Builders\StudentForm;

class Create extends Controller
{
    public function __invoke(StudentForm $form)
    {
        return ['form' => $form->create()];
    }
}
