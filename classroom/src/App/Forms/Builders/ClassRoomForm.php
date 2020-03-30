<?php

namespace Sibtain\Classroom\App\Forms\Builders;

use Sibtain\Campuses\App\Campus;
use Sibtain\Classroom\App\ClassRoom;
use LaravelEnso\Forms\App\Services\Form;
use Sibtain\Teachers\App\Teacher;

class ClassRoomForm
{
    protected const TemplatePath = __DIR__.'/../Templates/classRoom.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = (new Form(static::TemplatePath))->options('teacher_id', Teacher::get(['id','name']))->options('campus_id', Campus::get(['id','name']));

    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(ClassRoom $classRoom)
    {
        return $this->form->edit($classRoom);
    }
}
