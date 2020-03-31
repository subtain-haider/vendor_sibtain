<?php

namespace Sibtain\Students\App\Http\Controllers\Students;

use Sibtain\Students\App\Student;
use Illuminate\Routing\Controller;
use Sibtain\Students\App\Http\Requests\ValidateStudentRequest;

class Store extends Controller
{
    public function __invoke(ValidateStudentRequest $request, Student $student)
    {
        $student->fill($request->validated())->save();

        return [
            'message' => __('The student was successfully created'),
            'redirect' => 'students.edit',
            'param' => ['student' => $student->id],
        ];
    }
}
