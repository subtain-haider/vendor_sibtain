<?php

namespace Sibtain\Classroom\App\Tables\Builders;

use Sibtain\Classroom\App\ClassRoom;
use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Tables\App\Contracts\Table;

class ClassRoomTable implements Table
{
    protected const TemplatePath = __DIR__.'/../../Templates/classRooms.json';

    public function query(): Builder
    {
        return ClassRoom::selectRaw('class_rooms.id,class_rooms.name,class_rooms.abbreviation,class_rooms.session,class_rooms.batch,teachers.name as teacher,campuses.name as campus')->leftJoin('teachers', 'class_rooms.teacher_id', '=', 'teachers.id')->leftJoin('campuses', 'class_rooms.campus_id', '=', 'campuses.id');

    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
