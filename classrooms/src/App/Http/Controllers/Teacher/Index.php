<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Teacher;

use Illuminate\Routing\Controller;
use Sibtain\Classrooms\App\Http\Resources\Student as Resource;
use Sibtain\Classrooms\App\Models\Classroom;

class Index extends Controller
{
    public function __invoke(Classroom $classroom)
    {
        return Resource::collection($classroom->teacher);
    }
}
