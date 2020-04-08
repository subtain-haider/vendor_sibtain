<?php

namespace Sibtain\Grades\App\Http\Controllers\Grades;

use Sibtain\Grades\App\Grade;
use Illuminate\Routing\Controller;
use Sibtain\Grades\App\Http\Requests\ValidateGradeRequest;

class Store extends Controller
{
    public function __invoke(ValidateGradeRequest $request, Grade $grade)
    {
        $grade->fill($request->validated())->save();

        return [
            'message' => __('The grade was successfully created'),
            'redirect' => 'grades.edit',
            'param' => ['grade' => $grade->id],
        ];
    }
}
