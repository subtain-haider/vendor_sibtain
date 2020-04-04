<?php

namespace Sibtain\Classrooms\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ValidateClassroomRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'abbreviation' => ['required', 'string', $this->unique('abbreviation')],
            'name' => ['required', 'string', $this->unique('name')],
            'company_id' => 'required|exists:companies,id',
        ];
    }

//    public function withValidator($validator)
//    {
//        if ($this->filled('mandatary') && $this->mandataryIsNotAssociated()) {
//            $validator->after(fn ($validator) => $validator->errors()
//                ->add('mandatary', __('The selected teacher is not associated to this classroom'))
//            );
//        }
//    }

//    protected function mandataryIsNotAssociated()
//    {
//        return ! $this->route('classroom')->people()
//            ->pluck('id')->contains($this->get('mandatary'));
//    }

    protected function unique(string $attribute)
    {
        return Rule::unique('classrooms', $attribute)
            ->ignore(optional($this->route('classroom'))->id);
    }
}
