<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Teacher;

use Illuminate\Routing\Controller;
use Sibtain\Classrooms\App\Forms\Builders\TeacherForm;
use Sibtain\Classrooms\App\Models\Classroom;

class Create extends Controller
{
    public function __invoke(Classroom $classroom, TeacherForm $form)
    {
        return ['form' => $form->create($classroom)];
    }
}
