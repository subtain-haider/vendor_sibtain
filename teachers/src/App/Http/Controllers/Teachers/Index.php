<?php

namespace Sibtain\Teachers\App\Http\Controllers\Teachers;

use Illuminate\Routing\Controller;
use Sibtain\Teachers\App\Http\Resources\Teacher as Resource;
use Sibtain\Teachers\App\Teacher;

class Index extends Controller
{
    public function __invoke()
    {
        return Resource::collection(
            Teacher::with(['subjects.name'])->latest()->get()
        );
    }
}
