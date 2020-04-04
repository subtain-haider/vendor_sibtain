<?php

namespace Sibtain\Classrooms\App\Http\Resources;

use Sibtain\Subjects\App\Subject;
use Sibtain\Teachers\App\Http\Resources\Student as Resource;

class Student extends Resource
{
    public function toArray($request)
    {
        return parent::toArray($request) + [
            'subjectnames' => $this->subjectIds,
            'createdAt' => $this->created_at->toDatetimeString(),
        ];
    }
}
