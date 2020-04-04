<?php

namespace Sibtain\Classroom\App\Http\Controllers\Classroom;

use Sibtain\Classroom\App\ClassRoom;
use Illuminate\Routing\Controller;

class Destroy extends Controller
{
    public function __invoke(ClassRoom $classRoom)
    {
        $classRoom->delete();

        return [
            'message' => __('The class room was successfully deleted'),
            'redirect' => 'classroom.index',
        ];
    }
}
