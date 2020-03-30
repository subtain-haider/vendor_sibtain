<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use LaravelEnso\Permissions\App\Models\Permission;
use Sibtain\Teachers\App\Teacher;

class TeacherSeeder extends Seeder
{
    private const Teacher = [
    ];

    public function run()
    {
        (new Collection(self::Teacher))
            ->each(fn ($teacher) => factory(Teacher::class)->create($teacher));
    }
}
