<?php

namespace Sibtain\Students\App\Http\Controllers\Students;

use LaravelEnso\Core\App\Models\User;
use LaravelEnso\People\App\Models\Person;
use Sibtain\Students\App\Student;
use Illuminate\Routing\Controller;

class Destroy extends Controller
{
    public function __invoke(Student $student)
    {


        if (User::where('email', $student->email)->delete()){
            if (Person::where('email', $student->email)->delete())
            {
                $student->delete();
            }
        }

        return [
            'message' => __('The student was successfully deleted'),
            'redirect' => 'students.index',
        ];
    }
}
