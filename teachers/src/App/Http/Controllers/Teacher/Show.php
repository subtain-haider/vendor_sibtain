<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teacher;

use Sibtain\Teachers\App\Teacher;
use Illuminate\Routing\Controller;

class Show extends Controller
{
    public function __invoke(Teacher $teacher)
    {
        return ['teacher' => $teacher];
    }
}
