<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teachers;

use Sibtain\Teachers\App\Teacher;
use Illuminate\Routing\Controller;
use Sibtain\Teachers\App\Http\Requests\ValidateTeacherRequest;

class Update extends Controller
{
    public function __invoke(ValidateTeacherRequest $request, Teacher $teacher)
    {
        $teacher->update($request->validated());

        return ['message' => __('The teacher was successfully updated')];
    }
}
