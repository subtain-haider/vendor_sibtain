<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Student;

use Illuminate\Routing\Controller;
use Sibtain\Classrooms\App\Forms\Builders\StudentForm;
use Sibtain\Classrooms\App\Models\Classroom;
use Sibtain\Students\App\Student;

class Edit extends Controller
{
    public function __invoke(Classroom $classroom, Student $student, StudentForm $form)
    {
        return ['form' => $form->classroom($classroom)->edit($student)];
    }
}
