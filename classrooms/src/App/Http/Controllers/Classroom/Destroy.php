<?php

namespace Sibtain\Classrooms\App\Http\Controllers\Classroom;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;
use Sibtain\Classrooms\App\Models\Classroom;

class Destroy extends Controller
{
    use AuthorizesRequests;

    public function __invoke(Classroom $classroom)
    {
        $this->authorize('destroy', $classroom);

        $classroom->delete();

        return [
            'message' => __('The Classroom was successfully deleted'),
            'redirect' => 'administration.classrooms.index',
        ];
    }
}
