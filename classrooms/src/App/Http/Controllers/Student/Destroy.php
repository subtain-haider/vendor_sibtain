<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Student;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;
use Sibtain\Classrooms\App\Exceptions\Classroom as Exception;
use Sibtain\Classrooms\App\Models\Classroom;
use Sibtain\Students\App\Student;

class Destroy extends Controller
{
    use AuthorizesRequests;

    public function __invoke(Classroom $classroom, Student $student)
    {
//        $this->authorize('manage-people', $classroom);

//        if (optional($classroom->mandatary())->id === $student->id
//            && $classroom->people()->exists()) {
//            throw Exception::dissociateMandatary();
//        }

        $student->classrooms()->detach($classroom->id);
    }
}
