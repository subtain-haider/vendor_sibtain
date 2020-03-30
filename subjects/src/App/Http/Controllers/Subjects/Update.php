<?php

namespace Sibtain\Subjects\App\Http\Controllers\Subjects;

use Sibtain\Subjects\App\Subject;
use Illuminate\Routing\Controller;
use Sibtain\Subjects\App\Http\Requests\ValidateSubjectUpdate;

class Update extends Controller
{
    public function __invoke(ValidateSubjectRequest $request, Subject $subject)
    {
        $subject->update($request->validated());

        return ['message' => __('The subject was successfully updated')];
    }
}
