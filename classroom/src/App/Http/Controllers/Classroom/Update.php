<?php

namespace Sibtain\Classroom\App\Http\Controllers\Classroom;

use Sibtain\Classroom\App\ClassRoom;
use Illuminate\Routing\Controller;
use Sibtain\Classroom\App\Http\Requests\ValidateClassRoomRequest;

class Update extends Controller
{
    public function __invoke(ValidateClassRoomRequest $request, ClassRoom $classRoom)
    {
        $classRoom->update($request->validated());

        return ['message' => __('The class room was successfully updated')];
    }
}
