<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teachers;

use Sibtain\Teachers\App\Student;
use Illuminate\Routing\Controller;

class Show extends Controller
{
    public function __invoke(Student $teacher)
    {
        return ['teacher' => $teacher];
    }
}
