<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teacher;

use Sibtain\Teachers\App\Teacher;
use Illuminate\Routing\Controller;

class Destroy extends Controller
{
    public function __invoke(Teacher $teacher)
    {
        $teacher->delete();

        return [
            'message' => __('The teacher was successfully deleted'),
            'redirect' => 'teacher.index',
        ];
    }
}
