<?php

namespace Sibtain\Students\App\Http\Controllers\Students;

use Illuminate\Routing\Controller;
use Sibtain\Students\App\Http\Resources\Student as Resource;
use Sibtain\Students\App\Student;

class Index extends Controller
{
    public function __invoke()
    {
        return Resource::collection(
            Student::get()
        );
    }
}
