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
            'id' => 'nullable|exists:class_rooms,id',
            'name' => 'required|max:200',
            'abbreviation' => 'required|max:50',
            'subjectIds' => 'array',
//            'subject_id' => 'required|exists:subjects,id',
            'campus_id' => 'required|exists:campuses,id',
        ];
    }
}
