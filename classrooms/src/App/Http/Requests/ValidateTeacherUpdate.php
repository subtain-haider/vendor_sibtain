<?php

namespace Sibtain\Classrooms\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateTeacherUpdate extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'classroom_id' => 'required|exists:classrooms,id',
            'id' => 'required|exists:teachers,id',
            'position' => 'string|nullable',
        ];
    }
}
