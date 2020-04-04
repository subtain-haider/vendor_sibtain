<?php

namespace Sibtain\Teachers\App\Forms\Builders;

use LaravelEnso\Companies\App\Models\Company;
use Sibtain\Subjects\App\Subject;
use Sibtain\Teachers\App\Student;
use LaravelEnso\Forms\App\Services\Form;

class TeacherForm
{
    protected const TemplatePath = __DIR__.'/../Templates/teacher.json';

    protected Form $form;

    public function __construct()
    {

        $this->form = (new Form(static::TemplatePath))->options('subjectIds', Subject::get(['id','name']))->options('company_id', Company::get(['id','name']));
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Student $teacher)
    {
        return $this->form->edit($teacher);
    }
}
