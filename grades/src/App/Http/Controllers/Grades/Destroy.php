<?php

namespace Sibtain\Grades\App\Http\Controllers\Grades;

use Sibtain\Grades\App\Grade;
use Illuminate\Routing\Controller;

class Destroy extends Controller
{
    public function __invoke(Grade $grade)
    {
        $grade->delete();

        return [
            'message' => __('The grade was successfully deleted'),
            'redirect' => 'grades.index',
        ];
    }
}
