<?php

namespace Sibtain\Subjects\App\Forms\Builders;

use Sibtain\Subjects\App\Subject;
use LaravelEnso\Forms\App\Services\Form;

class SubjectForm
{
    protected const TemplatePath = __DIR__.'/../Templates/subject.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = new Form(static::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Subject $subject)
    {
        return $this->form->edit($subject);
    }
}
