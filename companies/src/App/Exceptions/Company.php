<?php

namespace Sibtain\Companies\App\Exceptions;

use LaravelEnso\Helpers\App\Exceptions\EnsoException;

class Company extends EnsoException
{
    public static function dissociateMandatary()
    {
        return new static(__(
            'You cannot dissociate the mandatary unless is the only one attached on this company'
        ));
    }
}
