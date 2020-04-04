<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Classroom;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;
use Sibtain\Classrooms\App\Http\Requests\ValidateClassroomRequest;
use Sibtain\Classrooms\App\Models\Classroom;

class Update extends Controller
{
    use AuthorizesRequests;

    public function __invoke(ValidateClassroomRequest $request, Classroom $classroom)
    {
        $this->authorize('update', $classroom);

        $classroom->update($request->validated());

//        tap($classroom)->update($request->validated())
//            ->updateMandatary($request->get('mandatary'));

        return ['message' => __('The Classroom was successfully updated')];
    }
}
