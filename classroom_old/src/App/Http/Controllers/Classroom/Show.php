<?php

namespace Sibtain\Classroom\App\Http\Controllers\Classroom;

use Sibtain\Classroom\App\ClassRoom;
use Illuminate\Routing\Controller;

class Show extends Controller
{
    public function __invoke(ClassRoom $classRoom)
    {
        return ['classRoom' => $classRoom];
    }
}
