<?php

namespace Sibtain\Subjects\App\Http\Controllers\Subjects;

use Sibtain\Subjects\App\Subject;
use Illuminate\Routing\Controller;

class Show extends Controller
{
    public function __invoke(Subject $subject)
    {
        return ['subject' => $subject];
    }
}
