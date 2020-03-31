<?php

namespace Sibtain\Teachers\App\Tables\Builders;

use Sibtain\Teachers\App\Teacher;
use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Tables\App\Contracts\Table;
use Sibtain\Teachers\App\Http\Resources\Teacher as Resource;

class TeacherTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/teachers.json';

    public function query(): Builder
    {
//        return Resource::collection(
//            Teacher::with(['subjects'])->latest()->get()
//        );
        return Teacher::selectRaw('teachers.id,teachers.name,teachers.cnic,teachers.phone_number,teachers.email,teachers.qualification,campuses.name as campus,teachers.status,teachers.joining_date')->leftJoin('campuses', 'teachers.campus_id', '=', 'campuses.id');
//            return  Teacher::all();
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
