<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teachers;

use Illuminate\Routing\Controller;
use Sibtain\Teachers\App\Http\Resources\Student as Resource;
use Sibtain\Teachers\App\Student;

class Index extends Controller
{
    public function __invoke()
    {
        return Resource::collection(
            Student::with(['subjects.name'])->latest()->get()
        );
    }
}
