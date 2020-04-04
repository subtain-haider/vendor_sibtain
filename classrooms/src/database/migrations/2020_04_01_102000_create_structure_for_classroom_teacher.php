<?php

use LaravelEnso\Migrator\App\Database\Migration;

class CreateStructureForClassroomTeacher extends Migration
{
    protected $permissions = [
        ['name' => 'administration.classrooms.teachers.create', 'description' => 'Add teacher to classroom', 'is_default' => false],
        ['name' => 'administration.classrooms.teachers.edit', 'description' => 'Edit existing classroom teacher', 'is_default' => false],
        ['name' => 'administration.classrooms.teachers.index', 'description' => 'Show classroom people', 'is_default' => false],
        ['name' => 'administration.classrooms.teachers.store', 'description' => 'Save newly added classroom teacher', 'is_default' => false],
        ['name' => 'administration.classrooms.teachers.update', 'description' => 'Update edited classroom teacher', 'is_default' => false],
        ['name' => 'administration.classrooms.teachers.destroy', 'description' => 'Delete classroom teacher', 'is_default' => false],
    ];
}
