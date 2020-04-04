<?php

namespace Sibtain\Students\App\Tables\Builders;

use Sibtain\Students\App\Student;
use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Tables\App\Contracts\Table;
use Sibtain\Students\App\Http\Resources\Student as Resource;

class StudentTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/students.json';

    public function query(): Builder
    {
//        return Resource::collection(
//            Student::with(['subjects'])->latest()->get()
//        );
        return Student::selectRaw('students.id,students.name,students.cnic,students.phone,students.email,students.father_name,students.father_cnic,students.father_phone,students.father_email,students.address,students.city,companies.name as company,classrooms.name as classroom,students.gender,students.status,students.dob')
            ->leftJoin('companies', 'students.company_id', '=', 'companies.id')
            ->leftJoin('classrooms', 'students.classroom_id', '=', 'classrooms.id');

//            return  Student::all();
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
