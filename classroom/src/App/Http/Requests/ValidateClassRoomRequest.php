<?php

namespace Sibtain\Classroom\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateClassRoomRequest extends FormRequest
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
