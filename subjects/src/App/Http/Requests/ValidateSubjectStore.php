<?php

namespace Sibtain\Subjects\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ValidateSubjectStore extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'code' => ['required', 'max:3', $this->unique_c()],
            'name' => ['required', 'max:20', $this->unique_n()],
        ];
    }

    protected function unique_c()
    {
        return Rule::unique('campuses', 'code');
    }

    protected function unique_n()
    {
        return Rule::unique('campuses', 'name');
    }
}

