<?php

namespace Sibtain\Students\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateStudentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id' => 'nullable|exists:students,id',
            'name' => 'required|max:200',
            'cnic' => 'required|max:50',
            'phone_number' => 'required|max:50',
            'email' => 'required|email|max:200',
            'father_name' => 'required|max:200',
            'father_cnic' => 'required|max:50',
            'father_phone' => 'required|max:50',
            'father_email' => 'required|email|max:200',
            'class_room_id' => 'required|exists:class_rooms,id',
            'campus_id' => 'required|exists:campuses,id',
            'status' => '',
        ];
    }
}
