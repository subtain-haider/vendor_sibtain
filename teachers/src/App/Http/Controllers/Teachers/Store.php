<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teachers;

use LaravelEnso\Core\App\Models\User;
use LaravelEnso\Core\App\Models\UserGroup;
use LaravelEnso\People\App\Models\Person;
use LaravelEnso\Roles\App\Models\Role;
use Sibtain\Teachers\App\Teacher;
use Illuminate\Routing\Controller;
use Sibtain\Teachers\App\Http\Requests\ValidateTeacherRequest;
use Sibtain\Teachers\App\Http\Resources\Teacher as Resource;

class Store extends Controller
{
    public function __invoke(ValidateTeacherRequest $request, Teacher $teacher)
    {
        if ($teacher->fill($request->validated())->save()){

            $person = new Person();
            $person->name = $request->name;
            $person->email = $request->email;
            $person->phone = $request->phone_number;
            $person->save();

            $user = new User();
            $user->person_id = $person->id;
            $user->group_id = UserGroup::whereName('Teacher')->first()->id;
            $user->role_id = Role::whereName('teacher_college')->first()->id;
            $user->email = $request->email;
            $user->password = '$2y$10$06TrEefmqWBO7xghm2PUzeF/O0wcawFUv8TKYq.NF6Dsa0Pnmd/F2';
            $user->is_active = true;
            $user->save();

        }

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
            'redirect' => 'teachers.index',
//            'param' => ['teacher' => $teacher->id],
        ];
    }
}
