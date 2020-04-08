<?php

namespace Sibtain\Classrooms\App\Http\Requests;

use Sibtain\Teachers\App\Teacher;

class ValidateTeacherStore extends ValidateTeacherUpdate
{
    public function withValidator($validator)
    {
        if ($this->teacherExists()) {
            $validator->after(fn ($validator) => $validator->errors()
                ->add('id', __('The selected teacher is already associated to this classroom'))
            );
        }
    }

    private function teacherExists()
    {
        return Teacher::whereId($this->get('id'))
            ->whereHas('classrooms', fn ($classrooms) => $classrooms
                ->whereId($this->get('classroom_id'))
            )->exists();
    }
}
