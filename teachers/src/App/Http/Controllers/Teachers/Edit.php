<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teachers;

use Sibtain\Teachers\App\Teacher;
use Illuminate\Routing\Controller;
use Sibtain\Teachers\App\Forms\Builders\TeacherForm;

class Edit extends Controller
{
    public function __invoke(Teacher $teacher, TeacherForm $form)
    {
        return ['form' => $form->edit($teacher)];
    }
}
