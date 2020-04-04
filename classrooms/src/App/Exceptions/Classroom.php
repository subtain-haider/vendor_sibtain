<?php

namespace Sibtain\Classrooms\App\Exceptions;

use LaravelEnso\Helpers\App\Exceptions\EnsoException;

class Classroom extends EnsoException
{
    public static function dissociateMandatary()
    {
        return new static(__(
            'You cannot dissociate the mandatary unless is the only one attached on this classroom'
        ));
    }
}
