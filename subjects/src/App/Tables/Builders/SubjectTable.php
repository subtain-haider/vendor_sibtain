<?php

namespace Sibtain\Subjects\App\Tables\Builders;

use Sibtain\Subjects\App\Subject;
use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Tables\App\Contracts\Table;

class SubjectTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/subjects.json';

    public function query(): Builder
    {
        return Subject::selectRaw('id,code,name');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
