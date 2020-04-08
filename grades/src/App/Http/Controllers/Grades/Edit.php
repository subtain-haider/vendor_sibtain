<?php

namespace Sibtain\Grades\App\Http\Controllers\Grades;

use Sibtain\Grades\App\Grade;
use Illuminate\Routing\Controller;
use Sibtain\Grades\App\Forms\Builders\GradeForm;

class Edit extends Controller
{
    public function __invoke(Grade $grade, GradeForm $form)
    {
        return ['form' => $form->edit($grade)];
    }
}
