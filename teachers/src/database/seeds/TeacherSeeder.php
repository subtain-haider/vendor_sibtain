<?php

use Illuminate\Database\Seeder;
use Sibtain\Classrooms\App\Models\Classroom;
use Sibtain\Subjects\App\Subject;
use Sibtain\Teachers\App\Teacher;

class TeacherSeeder extends Seeder
{

    public function run()
    {
        factory(Teacher::class, 50)->create()->each(function ($teacher){
            $teacher->subjects()->sync(Subject::all()->random()->id,);
            $teacher->classrooms()->sync(Classroom::all()->random()->id,);
        });


    }
}
