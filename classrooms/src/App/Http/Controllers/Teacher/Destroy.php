<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Teacher;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;
use Sibtain\Classrooms\App\Exceptions\Classroom as Exception;
use Sibtain\Classrooms\App\Models\Classroom;
use Sibtain\Teachers\App\Teacher;

class Destroy extends Controller
{
    use AuthorizesRequests;

    public function __invoke(Classroom $classroom, Teacher $teacher)
    {
//        $this->authorize('manage-people', $classroom);

//        if (optional($classroom->mandatary())->id === $teacher->id
//            && $classroom->people()->exists()) {
//            throw Exception::dissociateMandatary();
//        }

        $teacher->classrooms()->detach($classroom->id);
    }
}
