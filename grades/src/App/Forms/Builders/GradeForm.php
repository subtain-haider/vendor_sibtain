<?php

namespace Sibtain\Grades\App\Forms\Builders;

use Sibtain\Grades\App\Grade;
use LaravelEnso\Forms\App\Services\Form;

class GradeForm
{
    protected const TemplatePath = __DIR__.'/../Templates/grade.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Grade $grade)
    {
        return $this->form->edit($grade);
    }
}
