<?php

namespace Sibtain\Grades\App\Http\Controllers\Grades;

use Illuminate\Routing\Controller;
use Sibtain\Grades\App\Forms\Builders\GradeForm;

class Create extends Controller
{
    public function __invoke(GradeForm $form)
    {
        return ['form' => $form->create()];
    }
}
