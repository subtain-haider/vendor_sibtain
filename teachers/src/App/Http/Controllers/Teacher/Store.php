<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teacher;

use Sibtain\Teachers\App\Teacher;
use Illuminate\Routing\Controller;
use Sibtain\Teachers\App\Http\Requests\ValidateTeacherRequest;
use Sibtain\Teachers\App\Http\Resources\Teacher as Resource;

class Store extends Controller
{
    public function __invoke(ValidateTeacherRequest $request, Teacher $teacher)
    {
        $teacher->fill($request->validated())->save();

//        $teacher = Teacher::updateOrCreate(
//            ['id' => $request->get('id')],
//            ['name' => $request->get('name')],
//            ['cnic' => $request->get('cnic')],
//            ['phone_number' => $request->get('phone_number')],
//            ['email' => $request->get('email')],
//            ['qualification' => $request->get('qualification')],
//            ['campus_id' => $request->get('campus_id')],
//            ['joining_date' => $request->get('joining_date')],
//        );

        $teacher->updateMembers($request->get('subjectIds'));

        return [
            'message' => __('The teacher was successfully created'),
//            'teacher' => new Resource($teacher->load(['subjects.name'])),
            'redirect' => 'teacher.edit',
            'param' => ['teacher' => $teacher->id],
        ];
    }
}
