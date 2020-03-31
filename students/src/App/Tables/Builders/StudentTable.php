<?php

namespace Sibtain\Students\App\Tables\Builders;

use Sibtain\Students\App\Student;
use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Tables\App\Contracts\Table;

class StudentTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/students.json';

    public function query(): Builder
    {
        return Student::selectRaw('students.id,students.name,students.cnic,students.phone_number,students.email,campuses.name as campus')->leftJoin('campuses', 'students.campus_id', '=', 'campuses.id');

    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
