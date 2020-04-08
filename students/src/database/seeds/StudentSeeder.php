<?php

use Illuminate\Database\Seeder;
use Sibtain\Classrooms\App\Models\Classroom;
use Sibtain\Subjects\App\Subject;
use Sibtain\Students\App\Student;

class StudentSeeder extends Seeder
{

    public function run()
    {
        factory(Student::class, 100)->create();


    }
}
