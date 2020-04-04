<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teachers;

use Illuminate\Routing\Controller;
use Sibtain\Teachers\App\Forms\Builders\StudentForm;

class Create extends Controller
{
    public function __invoke(StudentForm $form)
    {
        return ['form' => $form->create()];
    }
}
