<?php

namespace Sibtain\Grades\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateGradeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
