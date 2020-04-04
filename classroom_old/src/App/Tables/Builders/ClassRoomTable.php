<?php

namespace Sibtain\Classroom\App\Tables\Builders;

use Sibtain\Classroom\App\ClassRoom;
use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Tables\App\Contracts\Table;

class ClassRoomTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/classRooms.json';

    public function query(): Builder
    {
        return ClassRoom::selectRaw('campuses.name as campus,class_rooms.id,class_rooms.name,class_rooms.abbreviation')->leftJoin('campuses', 'class_rooms.campus_id', '=', 'campuses.id');

    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
