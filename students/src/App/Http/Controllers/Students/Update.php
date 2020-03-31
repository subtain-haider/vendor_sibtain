<?php

namespace Sibtain\Students\App\Http\Controllers\Students;

use Sibtain\Students\App\Student;
use Illuminate\Routing\Controller;
use Sibtain\Students\App\Http\Requests\ValidateStudentRequest;

class Update extends Controller
{
    public function __invoke(ValidateStudentRequest $request, Student $student)
    {
        $student->update($request->validated());

        return ['message' => __('The student was successfully updated')];
    }
}
