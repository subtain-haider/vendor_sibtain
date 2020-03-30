<?php

use LaravelEnso\Migrator\App\Database\Migration;

class CreateStructureForTeachers extends Migration
{
    protected $permissions = [
        ['name' => 'teacher.index', 'description' => 'Show index for teachers', 'is_default' => false],

        ['name' => 'teacher.create', 'description' => 'Create teacher', 'is_default' => false],
        ['name' => 'teacher.store', 'description' => 'Store a new teacher', 'is_default' => false],
        ['name' => 'teacher.show', 'description' => 'Show teacher', 'is_default' => false],
        ['name' => 'teacher.edit', 'description' => 'Edit teacher', 'is_default' => false],
        ['name' => 'teacher.update', 'description' => 'Update teacher', 'is_default' => false],
        ['name' => 'teacher.destroy', 'description' => 'Delete teacher', 'is_default' => false],
        ['name' => 'teacher.initTable', 'description' => 'Init table for teachers', 'is_default' => false],

        ['name' => 'teacher.tableData', 'description' => 'Get table data for teachers', 'is_default' => false],

        ['name' => 'teacher.exportExcel', 'description' => 'Export excel for teachers', 'is_default' => false],

        ['name' => 'teacher.options', 'description' => 'Get teacher options for select', 'is_default' => false],
    ];

    protected $menu = [
        'name' => 'Teachers', 'icon' => 'cogs', 'route' => 'teacher.index', 'order_index' => 202, 'has_children' => false
    ];

    protected $parentMenu = '';
}

