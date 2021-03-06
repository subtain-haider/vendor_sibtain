<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use LaravelEnso\Permissions\App\Models\Permission;
use Sibtain\Subjects\App\Subject;
use Sibtain\Teachers\App\Student;


class SubjectSeeder extends Seeder
{
    private const Subject = [
        ['code' => 'PHY', 'name' => 'Physics'],
        ['code' => 'CHM', 'name' => 'Chemistry'],
        ['code' => 'BIO', 'name' => 'Biology'],
        ['code' => 'ENG', 'name' => 'English'],
        ['code' => 'URD', 'name' => 'URDU'],
        ['code' => 'ISL', 'name' => 'Islamiyat'],
        ['code' => 'MTH', 'name' => 'Math'],
        ['code' => 'STA', 'name' => 'Statistics'],
        ['code' => 'COM', 'name' => 'Computer'],
    ];

    public function run()
    {
        (new Collection(self::Subject))
            ->each(fn ($subject) => factory(Subject::class)->create($subject)->each(function ($subject) {
                $subject->teachers()->save(factory(Student::class)->make());
            }));


    }
}
