<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Sibtain\Grades\App\Grade;

class GradeSeeder extends Seeder
{
    private const Grades = [
        ['company_id' => 1, 'name' => '1st Year FSC(Pre-Medical)', 'abbreviation' => '11MED'],
        ['company_id' => 1, 'name' => '1st Year FSC(Pre-Engineering)', 'abbreviation' => '11ENG'],
        ['company_id' => 1, 'name' => '1st Year ICS', 'abbreviation' => '11ICS'],
        ['company_id' => 2, 'name' => '1st Year FSC(Pre-Medical)', 'abbreviation' => '11MED'],
        ['company_id' => 2, 'name' => '1st Year FSC(Pre-Engineering)', 'abbreviation' => '11ENG'],
        ['company_id' => 2, 'name' => '1st Year ICS', 'abbreviation' => '11ICS'],
        ['company_id' => 1, 'name' => '2nd Year FSC(Pre-Medical)', 'abbreviation' => '12MED'],
        ['company_id' => 1, 'name' => '2nd Year FSC(Pre-Engineering)', 'abbreviation' => '12ENG'],
        ['company_id' => 1, 'name' => '2nd Year ICS', 'abbreviation' => '12ICS'],
        ['company_id' => 2, 'name' => '2nd Year FSC(Pre-Medical)', 'abbreviation' => '12MED'],
        ['company_id' => 2, 'name' => '2nd Year FSC(Pre-Engineering)', 'abbreviation' => '12ENG'],
        ['company_id' => 2, 'name' => '2nd Year ICS', 'abbreviation' => '12ICS'],
        ['company_id' => 3, 'name' => '9th', 'abbreviation' => '09'],
        ['company_id' => 3, 'name' => '10th', 'abbreviation' => '10'],


    ];

    public function run()
    {
        (new Collection(self::Grades))
            ->each(fn ($grades) => factory(Grade::class)->create($grades));
    }
}
