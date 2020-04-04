<?php

namespace Sibtain\Students\App\Enums;

use LaravelEnso\Enums\app\Services\Enum;

class StudentGender extends Enum
{
    const MALE = 1;
    const FEMALE = 2;
    const OTHER = 3;
    protected static array $data = [
        self::MALE => 'Male',
        self::FEMALE => 'Female',
        self::OTHER => 'Other',
    ];
}
