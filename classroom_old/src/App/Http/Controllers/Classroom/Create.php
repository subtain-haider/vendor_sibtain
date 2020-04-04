<?php

namespace Sibtain\Classroom\App\Http\Controllers\Classroom;

use Illuminate\Routing\Controller;
use Sibtain\Classroom\App\Forms\Builders\ClassRoomForm;

class Create extends Controller
{
    public function __invoke(ClassRoomForm $form)
    {
        return ['form' => $form->create()];
    }
}
