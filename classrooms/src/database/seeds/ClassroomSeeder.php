<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Sibtain\Classrooms\App\Models\Classroom;

class ClassroomSeeder extends Seeder
{
    private const Classrooms = [
        ['company_id' => 1, 'name' => '1st Year FSC(Pre-Medical)', 'abbreviation' => '1st-Medical'],
        ['company_id' => 1, 'name' => '1st Year FSC(Pre-Engineering)', 'abbreviation' => '1st-Engineering'],
        ['company_id' => 1, 'name' => '1st Year ICS', 'abbreviation' => '1st-ICS'],
        ['company_id' => 2, 'name' => '1st Year FSC(Pre-Medical)', 'abbreviation' => '1st-Medical'],
        ['company_id' => 2, 'name' => '1st Year FSC(Pre-Engineering)', 'abbreviation' => '1st-Engineering'],
        ['company_id' => 2, 'name' => '1st Year ICS', 'abbreviation' => '1st-ICS'],
        ['company_id' => 1, 'name' => '2nd Year FSC(Pre-Medical)', 'abbreviation' => '2nd-Medical'],
        ['company_id' => 1, 'name' => '2nd Year FSC(Pre-Engineering)', 'abbreviation' => '2nd-Engineering'],
        ['company_id' => 1, 'name' => '2nd Year ICS', 'abbreviation' => '2nd-ICS'],
        ['company_id' => 2, 'name' => '2nd Year FSC(Pre-Medical)', 'abbreviation' => '2nd-Medical'],
        ['company_id' => 2, 'name' => '2nd Year FSC(Pre-Engineering)', 'abbreviation' => '2nd-Engineering'],
        ['company_id' => 2, 'name' => '2nd Year ICS', 'abbreviation' => '2nd-ICS'],
        ['company_id' => 3, 'name' => '9th', 'abbreviation' => '9th'],
        ['company_id' => 3, 'name' => '10th', 'abbreviation' => '10th'],


    ];

    public function run()
    {
        (new Collection(self::Classrooms))
            ->each(fn ($classroom) => factory(Classroom::class)->create($classroom));
    }
}
