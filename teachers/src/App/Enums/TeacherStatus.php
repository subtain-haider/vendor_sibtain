<?php

namespace Sibtain\Teachers\App\Enums;

use LaravelEnso\Enums\app\Services\Enum;

class TeacherStatus extends Enum
{
    const ACTIVE = 1;
    const ONLEAVE = 2;
    const FIRED = 3;
    protected static array $data = [
        self::ACTIVE => 'Active',
        self::ONLEAVE => 'Onleave',
        self::FIRED => 'Fired',
    ];
}
