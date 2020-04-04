<?php

namespace Sibtain\Students\App\Forms\Builders;

use LaravelEnso\Companies\App\Models\Company;
use Sibtain\Subjects\App\Subject;
use Sibtain\Students\App\Student;
use LaravelEnso\Forms\App\Services\Form;

class StudentForm
{
    protected const TemplatePath = __DIR__.'/../Templates/student.json';

    protected Form $form;

    public function __construct()
    {

        $this->form = (new Form(static::TemplatePath));
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Student $student)
    {
        return $this->form->edit($student);
    }
}
