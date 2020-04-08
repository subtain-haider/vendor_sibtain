<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Student;

use Illuminate\Routing\Controller;
//use Sibtain\Classrooms\App\Http\Resources\Student as Resource;
use Sibtain\Classrooms\App\Models\Classroom;
use Sibtain\Students\App\Http\Resources\Student as Resource;
use Sibtain\Students\App\Student;

class Index extends Controller
{
    public function __invoke(Classroom $classroom)
    {
        return Student::where('classroom_id', $classroom->id)->get();
//        return Resource::collection($classroom->student);
    }
}
