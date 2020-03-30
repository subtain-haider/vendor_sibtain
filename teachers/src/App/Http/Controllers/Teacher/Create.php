<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teacher;

use Illuminate\Routing\Controller;
use Sibtain\Teachers\App\Forms\Builders\TeacherForm;

class Create extends Controller
{
    public function __invoke(TeacherForm $form)
    {
        return ['form' => $form->create()];
    }
}
