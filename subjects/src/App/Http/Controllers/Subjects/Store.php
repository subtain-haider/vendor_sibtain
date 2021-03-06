<?php

namespace Sibtain\Subjects\App\Http\Controllers\Subjects;

use Sibtain\Subjects\App\Subject;
use Illuminate\Routing\Controller;
use Sibtain\Subjects\App\Http\Requests\ValidateSubjectStore;

class Store extends Controller
{
    public function __invoke(ValidateSubjectRequest $request, Subject $subject)
    {
        $subject->fill($request->validated())->save();

        return [
            'message' => __('The subject was successfully created'),
            'redirect' => 'subjects.create'
        ];
    }
}
