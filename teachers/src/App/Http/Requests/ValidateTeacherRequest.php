<?php

namespace Sibtain\Teachers\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateTeacherRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id' => 'nullable|exists:teachers,id',
            'name' => 'required|max:200',
            'cnic' => 'required|max:50',
            'phone_number' => 'required|max:50',
            'email' => 'required|email|max:200|unique:teachers|unique:people|unique:companies',
            'qualification' => '|max:200',
            'subjectIds' => 'array',
//            'subject_id' => 'required|exists:subjects,id',
            'company_id' => 'required|exists:companies,id',
            'joining_date' => 'nullable|date|before:tomorrow',
            'status' => '',
        ];
    }
}
