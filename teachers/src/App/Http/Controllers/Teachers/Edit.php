<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teachers;

use Sibtain\Teachers\App\Student;
use Illuminate\Routing\Controller;
use Sibtain\Teachers\App\Forms\Builders\StudentForm;

class Edit extends Controller
{
    public function __invoke(Student $teacher, StudentForm $form)
    {
        return ['form' => $form->edit($teacher)];
    }
}
