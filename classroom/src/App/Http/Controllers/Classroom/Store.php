<?php

namespace Sibtain\Classroom\App\Http\Controllers\Classroom;

use Sibtain\Classroom\App\ClassRoom;
use Illuminate\Routing\Controller;
use Sibtain\Classroom\App\Http\Requests\ValidateClassRoomRequest;

class Store extends Controller
{
    public function __invoke(ValidateClassRoomRequest $request, ClassRoom $classRoom)
    {
        $classRoom->fill($request->validated())->save();

        $classRoom->updateMembers($request->get('subjectIds'));

        return [
            'message' => __('The class room was successfully created'),
            'redirect' => 'classroom.edit',
            'param' => ['classRoom' => $classRoom->id],
        ];
    }
}
