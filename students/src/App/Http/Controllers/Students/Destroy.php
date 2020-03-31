<?php

namespace Sibtain\Students\App\Http\Controllers\Students;

use Sibtain\Students\App\Student;
use Illuminate\Routing\Controller;

class Destroy extends Controller
{
    public function __invoke(Student $student)
    {
        $student->delete();

        return [
            'message' => __('The student was successfully deleted'),
            'redirect' => 'students.index',
        ];
    }
}
