<?php

namespace Sibtain\Teachers\App\Forms\Builders;

use Sibtain\Campuses\App\Campus;
use Sibtain\Subjects\App\Subject;
use Sibtain\Teachers\App\Teacher;
use LaravelEnso\Forms\App\Services\Form;

class TeacherForm
{
    protected const TemplatePath = __DIR__.'/../Templates/teacher.json';

    protected Form $form;

    public function __construct()
    {

        $this->form = (new Form(static::TemplatePath))->options('subjectIds', Subject::get(['id','name']))->options('campus_id', Campus::get(['id','name']));
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Teacher $teacher)
    {
        return $this->form->edit($teacher);
    }
}
