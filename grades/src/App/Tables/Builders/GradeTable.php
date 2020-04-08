<?php

namespace Sibtain\Grades\App\Tables\Builders;

use Sibtain\Grades\App\Grade;
use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Tables\App\Contracts\Table;

class GradeTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/grades.json';

    public function query(): Builder
    {
        return Grade::selectRaw('
            grades.id
        ');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
