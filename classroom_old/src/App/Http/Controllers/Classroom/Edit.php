<?php

namespace Sibtain\Classroom\App\Http\Controllers\Classroom;

use Sibtain\Classroom\App\ClassRoom;
use Illuminate\Routing\Controller;
use Sibtain\Classroom\App\Forms\Builders\ClassRoomForm;

class Edit extends Controller
{
    public function __invoke(ClassRoom $classRoom, ClassRoomForm $form)
    {
        return ['form' => $form->edit($classRoom)];
    }
}
