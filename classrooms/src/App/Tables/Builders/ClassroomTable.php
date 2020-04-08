<?php

namespace Sibtain\Classrooms\App\Tables\Builders;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Sibtain\Classrooms\App\Models\Classroom;
use LaravelEnso\Tables\App\Contracts\Table;
use Sibtain\Teachers\App\Teacher;

class ClassroomTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/classrooms.json';

    public function query(): Builder
    {
        //        For Admin
        if (Auth::user()->role->name == 'admin' || Auth::user()->role->name == 'super') {
            return Classroom::selectRaw('classrooms.id,classrooms.name,classrooms.abbreviation,companies.name as company,classrooms.created_at')->leftJoin('companies', 'classrooms.company_id', '=', 'companies.id');
        }

        //        For Campus Head
        elseif (Auth::user()->group->name == 'Teacher'){
            $email = Auth::user()->email;
//            $person = Person::find(5);
//
//            $teacher_id = $person->teacher->id;

            $teacher_id = Teacher::where('email', $email)->pluck('id');



            return Classroom::selectRaw('classrooms.id,classrooms.name,classrooms.abbreviation,companies.name as company,classrooms.created_at')
                ->join(
                    'classroom_teacher',
                    fn ($join) => $join
                        ->on('classrooms.id', '=', 'classroom_teacher.classroom_id')
                        ->where('classroom_teacher.teacher_id', '=', $teacher_id)
                )->leftJoin('companies', 'classrooms.company_id', '=', 'companies.id');

        }

    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
