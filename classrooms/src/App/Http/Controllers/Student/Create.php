<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Student;

use Illuminate\Routing\Controller;
use Sibtain\Classrooms\App\Forms\Builders\StudentForm;
use Sibtain\Classrooms\App\Models\Classroom;

class Create extends Controller
{
    public function __invoke(Classroom $classroom, StudentForm $form)
    {
        return ['form' => $form->create($classroom)];
    }
}
