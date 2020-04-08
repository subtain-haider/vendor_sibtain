<?php

namespace Sibtain\Classrooms\App\Http\Resources;

use Sibtain\Teachers\App\Http\Resources\Teacher as Resource;

class Teacher extends Resource
{
    public function toArray($request)
    {
        return parent::toArray($request) + [
            'subjectnames' => $this->subjectIds,
            'createdAt' => $this->created_at->toDatetimeString(),
        ];
    }
}
