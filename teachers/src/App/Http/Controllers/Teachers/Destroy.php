<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teachers;

use LaravelEnso\Core\App\Models\User;
use LaravelEnso\People\App\Models\Person;
use Sibtain\Teachers\App\Teacher;
use Illuminate\Routing\Controller;

class Destroy extends Controller
{
    public function __invoke(Teacher $teacher)
    {
        if (User::where('email', $teacher->email)->delete()){
            if (Person::where('email', $teacher->email)->delete())
            {
                $teacher->delete();
            }
        }
        return [
            'message' => __('The teacher was successfully deleted'),
            'redirect' => 'teachers.index',
        ];
    }
}
