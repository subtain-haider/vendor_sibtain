<?php

namespace Sibtain\Students\App\Http\Controllers\Students;

use Sibtain\Students\App\Student;
use Illuminate\Routing\Controller;
use Sibtain\Students\App\Forms\Builders\StudentForm;

class Edit extends Controller
{
    public function __invoke(Student $student, StudentForm $form)
    {
        return ['form' => $form->edit($student)];
    }
}
