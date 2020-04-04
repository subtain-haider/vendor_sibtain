<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teachers;

use Sibtain\Teachers\App\Student;
use Illuminate\Routing\Controller;
use Sibtain\Teachers\App\Http\Requests\ValidateStudentRequest;

class Update extends Controller
{
    public function __invoke(ValidateStudentRequest $request, Student $teacher)
    {
        $teacher->update($request->validated());

        return ['message' => __('The teacher was successfully updated')];
    }
}
