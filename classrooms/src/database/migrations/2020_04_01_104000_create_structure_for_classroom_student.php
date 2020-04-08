<?php

use LaravelEnso\Migrator\App\Database\Migration;

class CreateStructureForClassroomStudent extends Migration
{
    protected $permissions = [
//        ['name' => 'administration.classrooms.students.create', 'description' => 'Add student to classroom', 'is_default' => false],
//        ['name' => 'administration.classrooms.students.edit', 'description' => 'Edit existing classroom student', 'is_default' => false],
        ['name' => 'administration.classrooms.students.index', 'description' => 'Show classroom students', 'is_default' => false],
//        ['name' => 'administration.classrooms.students.store', 'description' => 'Save newly added classroom student', 'is_default' => false],
//        ['name' => 'administration.classrooms.students.update', 'description' => 'Update edited classroom student', 'is_default' => false],
//        ['name' => 'administration.classrooms.students.destroy', 'description' => 'Delete classroom student', 'is_default' => false],
    ];
}
