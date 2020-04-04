<?php

namespace Sibtain\Classrooms\App\Forms\Builders;

use LaravelEnso\Companies\App\Models\Company;
use Sibtain\Classrooms\App\Models\Classroom;
use LaravelEnso\Forms\App\Services\Form;

class ClassroomForm
{
    protected const TemplatePath = __DIR__.'/../Templates/classroom.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = (new Form(static::TemplatePath))->options('company_id', Company::get(['id','name']));

    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Classroom $classroom)
    {
        return $this->form
            ->edit($classroom);
    }
}
