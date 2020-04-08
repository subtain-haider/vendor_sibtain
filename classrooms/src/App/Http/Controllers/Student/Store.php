<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Student;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;
use Sibtain\Classrooms\App\Http\Requests\ValidateStudentStore;
use Sibtain\Classrooms\App\Models\Classroom;

class Store extends Controller
{
    use AuthorizesRequests;

    public function __invoke(ValidateStudentStore $request)
    {
        $classroom = Classroom::find($request->get('classroom_id'));
        $studentId = $request->get('id');

//        $this->authorize('manage-students', $classroom);

        $classroom->attachPerson($studentId, $request->get('position'));

        return ['message' => __('The Student was successfully assigned')];
    }
}
