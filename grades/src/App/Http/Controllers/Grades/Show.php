<?php

namespace Sibtain\Grades\App\Http\Controllers\Grades;

use Sibtain\Grades\App\Grade;
use Illuminate\Routing\Controller;

class Show extends Controller
{
    public function __invoke(Grade $grade)
    {
        return ['grade' => $grade];
    }
}
