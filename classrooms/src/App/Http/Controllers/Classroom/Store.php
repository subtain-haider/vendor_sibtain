<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Classroom;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;
use Sibtain\Classrooms\App\Http\Requests\ValidateClassroomRequest;
use Sibtain\Classrooms\App\Models\Classroom;

class Store extends Controller
{
    use AuthorizesRequests;

    public function __invoke(ValidateClassroomRequest $request, Classroom $classroom)
    {
        $classroom->fill($request->validated());

        $this->authorize('store', $classroom);

        $classroom->save();

        return [
            'message' => __('The Classroom was successfully created'),
            'redirect' => 'administration.classrooms.edit',
            'param' => ['classroom' => $classroom->id],
        ];
    }
}
