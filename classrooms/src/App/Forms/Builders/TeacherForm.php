<?php

namespace Sibtain\Classrooms\App\Forms\Builders;

use Sibtain\Classrooms\App\Models\Classroom;
use LaravelEnso\Forms\App\Services\Form;
use Sibtain\Teachers\App\Student;

class TeacherForm
{
    protected const TemplatePath = __DIR__.'/../Templates/teacher.json';

    protected Form $form;
    protected Classroom $classroom;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form
            ->actions('store')
            ->create();
    }

    public function edit(Student $teacher)
    {
        return $this->form->actions('update')
//            ->value('position', $teacher->position($this->classroom))
            ->readonly('id')
            ->edit($teacher);
    }

    public function classroom(Classroom $classroom)
    {
        $this->classroom = $classroom;

        return $this;
    }
}
