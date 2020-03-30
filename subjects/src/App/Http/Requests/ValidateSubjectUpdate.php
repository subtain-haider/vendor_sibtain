<?php

namespace Sibtain\Subjects\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateSubjectUpdate extends ValidateCampusStore
{
    protected function unique_c()
    {
        return parent::unique_c()
            ->ignore($this->route('subject')->id);
    }
    protected function unique_n()
    {
        return parent::unique_n()
            ->ignore($this->route('subject')->id);
    }
}

