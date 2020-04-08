<?php

namespace Sibtain\Classrooms\App\Http\Resources;

use Sibtain\Students\App\Http\Resources\Student as Resource;

class Student extends Resource
{
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
