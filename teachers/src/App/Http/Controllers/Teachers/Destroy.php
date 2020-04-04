<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teachers;

use Sibtain\Teachers\App\Student;
use Illuminate\Routing\Controller;

class Destroy extends Controller
{
    public function __invoke(Student $teacher)
    {
        $teacher->delete();

        return [
            'message' => __('The teacher was successfully deleted'),
            'redirect' => 'teachers.index',
        ];
    }
}
