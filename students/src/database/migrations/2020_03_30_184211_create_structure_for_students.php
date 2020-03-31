<?php

use LaravelEnso\Migrator\App\Database\Migration;

class CreateStructureForStudents extends Migration
{
    protected $permissions = [
        ['name' => 'students.index', 'description' => 'Show index for students', 'is_default' => false],

        ['name' => 'students.create', 'description' => 'Create student', 'is_default' => false],
        ['name' => 'students.store', 'description' => 'Store a new student', 'is_default' => false],
        ['name' => 'students.show', 'description' => 'Show student', 'is_default' => false],
        ['name' => 'students.edit', 'description' => 'Edit student', 'is_default' => false],
        ['name' => 'students.update', 'description' => 'Update student', 'is_default' => false],
        ['name' => 'students.destroy', 'description' => 'Delete student', 'is_default' => false],
        ['name' => 'students.initTable', 'description' => 'Init table for students', 'is_default' => false],

        ['name' => 'students.tableData', 'description' => 'Get table data for students', 'is_default' => false],

        ['name' => 'students.exportExcel', 'description' => 'Export excel for students', 'is_default' => false],

        ['name' => 'students.options', 'description' => 'Get student options for select', 'is_default' => false],
    ];

    protected $menu = [
        'name' => 'Students', 'icon' => 'cogs', 'route' => 'students.index', 'order_index' => 203, 'has_children' => false
    ];

    protected $parentMenu = '';
}

