<?php

namespace Sibtain\Classrooms\App\Forms\Builders;

use App\Grade;
use Illuminate\Support\Facades\Auth;
use LaravelEnso\Companies\App\Models\Company;
use Sibtain\Classrooms\App\Models\Classroom;
use LaravelEnso\Forms\App\Services\Form;

class ClassroomForm
{
    protected const TemplatePath = __DIR__.'/../Templates/classroom.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = (new Form(static::TemplatePath))->options('company_id', Company::get(['id','name','code']));

    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Classroom $classroom)
    {
        //        For Admin
        if (Auth::user()->role->name == 'admin' || Auth::user()->role->name == 'super') {
            return $this->form
                ->edit($classroom);
        }
        else{
            return true;
        }
    }
}
