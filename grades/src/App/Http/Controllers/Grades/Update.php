<?php

namespace Sibtain\Grades\App\Http\Controllers\Grades;

use Sibtain\Grades\App\Grade;
use Illuminate\Routing\Controller;
use Sibtain\Grades\App\Http\Requests\ValidateGradeRequest;

class Update extends Controller
{
    public function __invoke(ValidateGradeRequest $request, Grade $grade)
    {
        $grade->update($request->validated());

        return ['message' => __('The grade was successfully updated')];
    }
}
