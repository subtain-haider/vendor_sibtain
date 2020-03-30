<?php

namespace Sibtain\Subjects\App\Http\Controllers\Subjects;

use Sibtain\Subjects\App\Subject;
use Illuminate\Routing\Controller;

class Destroy extends Controller
{
    public function __invoke(Subject $subject)
    {
        $subject->delete();

        return [
            'message' => __('The subject was successfully deleted'),
            'redirect' => 'subjects.index',
        ];
    }
}
