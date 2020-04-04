<?php

namespace Sibtain\Students\App\Enums;

use LaravelEnso\Enums\app\Services\Enum;

class StudentStatus extends Enum
{
    const ACTIVE = 1;
    const ONLEAVE = 2;
    const DROPPED = 3;
    protected static array $data = [
        self::ACTIVE => 'Active',
        self::ONLEAVE => 'Onleave',
        self::DROPPED => 'Dropped',
    ];
}
