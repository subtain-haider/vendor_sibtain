<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Teacher;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;
use Sibtain\Classrooms\App\Http\Requests\ValidateTeacherStore;
use Sibtain\Classrooms\App\Models\Classroom;

class Store extends Controller
{
    use AuthorizesRequests;

    public function __invoke(ValidateTeacherStore $request)
    {
        $classroom = Classroom::find($request->get('classroom_id'));
        $teacherId = $request->get('id');

//        $this->authorize('manage-teachers', $classroom);

        $classroom->attachPerson($teacherId, $request->get('position'));

        return ['message' => __('The Teacher was successfully assigned')];
    }
}
