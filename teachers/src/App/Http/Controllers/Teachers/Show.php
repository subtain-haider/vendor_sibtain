<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teachers;

use Sibtain\Teachers\App\Teacher;
use Illuminate\Routing\Controller;

class Show extends Controller
{
    public function __invoke(Teacher $teacher)
    {
        return ['teacher' => $teacher];
    }
}
