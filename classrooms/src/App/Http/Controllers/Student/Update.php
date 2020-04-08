<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Student;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;
use Sibtain\Classrooms\App\Http\Requests\ValidateStudentUpdate;
use Sibtain\Classrooms\App\Models\Classroom;
use Sibtain\Students\App\Student;

class Update extends Controller
{
    use AuthorizesRequests;

    public function __invoke(ValidateStudentUpdate $request, Student $student)
    {
        $classroom = Classroom::find($request->get('classroom_id'));

        $this->authorize('manage-people', $classroom);

        $student->classrooms()->updateExistingPivot(
            $classroom->id, $request->only('position')
        );

        return ['message' => __('The student has been successfully updated')];
    }
}
