<?php

namespace Sibtain\Teachers\App\Enums;

use LaravelEnso\Enums\app\Services\Enum;

class StudentStatus extends Enum
{
    const ACTIVE = 1;
    const GRADUATED = 2;
    const EXPELLED = 3;
    const DECEASED = 4;
    protected static array $data = [
        self::ACTIVE => 'Active',
        self::GRADUATED => 'Graduated',
        self::EXPELLED => 'Expelled',
        self::DECEASED => 'Deceased',
    ];
}
