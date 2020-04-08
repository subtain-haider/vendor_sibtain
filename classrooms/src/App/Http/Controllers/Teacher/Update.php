<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Teacher;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;
use Sibtain\Classrooms\App\Http\Requests\ValidateTeacherUpdate;
use Sibtain\Classrooms\App\Models\Classroom;
use Sibtain\Teachers\App\Teacher;

class Update extends Controller
{
    use AuthorizesRequests;

    public function __invoke(ValidateTeacherUpdate $request, Teacher $teacher)
    {
        $classroom = Classroom::find($request->get('classroom_id'));

        $this->authorize('manage-people', $classroom);

        $teacher->classrooms()->updateExistingPivot(
            $classroom->id, $request->only('position')
        );

        return ['message' => __('The teacher has been successfully updated')];
    }
}
