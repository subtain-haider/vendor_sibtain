<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Classroom;

use Illuminate\Routing\Controller;
use Sibtain\Classrooms\App\Forms\Builders\ClassroomForm;

class Create extends Controller
{
    public function __invoke(ClassroomForm $form)
    {
        return ['form' => $form->create()];
    }
}
