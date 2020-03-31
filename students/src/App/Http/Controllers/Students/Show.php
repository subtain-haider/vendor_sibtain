<?php

namespace Sibtain\Students\App\Http\Controllers\Students;

use Sibtain\Students\App\Student;
use Illuminate\Routing\Controller;

class Show extends Controller
{
    public function __invoke(Student $student)
    {
        return ['student' => $student];
    }
}
