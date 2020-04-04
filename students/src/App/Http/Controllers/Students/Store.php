<?php

namespace Sibtain\Students\App\Http\Controllers\Students;

use Sibtain\Students\App\Student;
use Illuminate\Routing\Controller;
use Sibtain\Students\App\Http\Requests\ValidateStudentRequest;
use Sibtain\Students\App\Http\Resources\Student as Resource;

class Store extends Controller
{
    public function __invoke(ValidateStudentRequest $request, Student $student)
    {
        $student->fill($request->validated())->save();

//        $student = Student::updateOrCreate(
//            ['id' => $request->get('id')],
//            ['name' => $request->get('name')],
//            ['cnic' => $request->get('cnic')],
//            ['phone_number' => $request->get('phone_number')],
//            ['email' => $request->get('email')],
//            ['qualification' => $request->get('qualification')],
//            ['campus_id' => $request->get('campus_id')],
//            ['joining_date' => $request->get('joining_date')],
//        );

//        $student->updateMembers($request->get('subjectIds'));

        return [
            'message' => __('The student was successfully created'),
//            'student' => new Resource($student->load(['subjects.name'])),
            'redirect' => 'students.edit',
            'param' => ['student' => $student->id],
        ];
    }
}
