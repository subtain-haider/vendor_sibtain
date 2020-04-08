<?php

namespace Sibtain\Students\App\Http\Controllers\Students;

use LaravelEnso\Core\App\Models\User;
use LaravelEnso\Core\App\Models\UserGroup;
use LaravelEnso\People\App\Models\Person;
use LaravelEnso\Roles\App\Models\Role;
use Sibtain\Students\App\Student;
use Illuminate\Routing\Controller;
use Sibtain\Students\App\Http\Requests\ValidateStudentRequest;
use Sibtain\Students\App\Http\Resources\Student as Resource;

class Store extends Controller
{
    public function __invoke(ValidateStudentRequest $request, Student $student)
    {

        if ($student->fill($request->validated())->save()){

            $person = new Person();
            $person->name = $request->name;
            $person->email = $request->email;
            $person->phone = $request->phone_number;
            $person->save();

            $user = new User();
            $user->person_id = $person->id;
            $user->group_id = UserGroup::whereName('Student')->first()->id;
            $user->role_id = Role::whereName('student_college')->first()->id;
            $user->email = $request->email;
            $user->password = '$2y$10$06TrEefmqWBO7xghm2PUzeF/O0wcawFUv8TKYq.NF6Dsa0Pnmd/F2';
            $user->is_active = true;
            $user->save();

        }

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
            'redirect' => 'students.index',
//            'param' => ['student' => $student->id],
        ];
    }
}
