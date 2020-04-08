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
            'phone' => 'required|max:50',
            'email' => 'required|email|max:200|unique:students|unique:people|unique:companies',
            'company_id' => 'required|exists:companies,id',
            'classroom_id' => 'required|exists:classrooms,id',
            'father_name' => 'required|max:200',
            'father_cnic' => 'required|max:50',
            'father_phone' => 'required|max:50',
            'father_email' => 'required|email|max:200|unique:students|unique:people|unique:companies',
            'address' => 'required|max:200',
            'city' => 'required|max:200',

            'dob' => 'nullable|date|before:tomorrow',
            'gender' => '',
            'status' => '',
        ];
    }
}
