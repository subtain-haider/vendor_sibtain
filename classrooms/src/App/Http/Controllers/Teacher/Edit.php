<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Teacher;

use Illuminate\Routing\Controller;
use Sibtain\Classrooms\App\Forms\Builders\TeacherForm;
use Sibtain\Classrooms\App\Models\Classroom;
use Sibtain\Teachers\App\Teacher;

class Edit extends Controller
{
    public function __invoke(Classroom $classroom, Teacher $teacher, TeacherForm $form)
    {
        return ['form' => $form->classroom($classroom)->edit($teacher)];
    }
}
