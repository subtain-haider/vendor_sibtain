<?php

namespace Sibtain\Subjects\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateSubjectRequest extends FormRequest
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
