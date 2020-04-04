<?php

namespace Sibtain\Classrooms\App\Tables\Builders;

use Illuminate\Database\Eloquent\Builder;
use Sibtain\Classrooms\App\Models\Classroom;
use LaravelEnso\Tables\App\Contracts\Table;

class ClassroomTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/classrooms.json';

    public function query(): Builder
    {
        return Classroom::selectRaw('classrooms.id,classrooms.name,classrooms.abbreviation,companies.name as company,classrooms.created_at')->leftJoin('companies', 'classrooms.company_id', '=', 'companies.id');


    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
