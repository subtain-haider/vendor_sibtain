<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Classroom;

use Illuminate\Routing\Controller;
use Sibtain\Classrooms\App\Forms\Builders\ClassroomForm;
use Sibtain\Classrooms\App\Models\Classroom;

class Edit extends Controller
{
    public function __invoke(Classroom $classroom, ClassroomForm $form)
    {
        return ['form' => $form->edit($classroom)];
    }
}
