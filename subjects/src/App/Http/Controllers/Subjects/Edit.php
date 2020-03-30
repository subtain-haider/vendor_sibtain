<?php

namespace Sibtain\Subjects\App\Http\Controllers\Subjects;

use Sibtain\Subjects\App\Subject;
use Illuminate\Routing\Controller;
use Sibtain\Subjects\App\Forms\Builders\SubjectForm;

class Edit extends Controller
{
    public function __invoke(Subject $subject, SubjectForm $form)
    {
        return ['form' => $form->edit($subject)];
    }
}
