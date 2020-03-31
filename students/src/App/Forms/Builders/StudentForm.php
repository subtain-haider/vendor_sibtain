<?php

namespace Sibtain\Students\App\Forms\Builders;

use Sibtain\Campuses\App\Campus;
use Sibtain\Classroom\App\ClassRoom;
use Sibtain\Students\App\Student;
use LaravelEnso\Forms\App\Services\Form;

class StudentForm
{
    protected const TemplatePath = __DIR__.'/../Templates/student.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = (new Form(static::TemplatePath))->options('class_roomIds', ClassRoom::get(['id','name']))->options('campus_id', Campus::get(['id','name']));

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
