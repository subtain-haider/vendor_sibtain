<?php

use LaravelEnso\Migrator\App\Database\Migration;

class CreateStructureForTeachers extends Migration
{
    protected $permissions = [
        ['name' => 'teachers.index', 'description' => 'Show index for teachers', 'is_default' => false],

        ['name' => 'teachers.create', 'description' => 'Create teacher', 'is_default' => false],
        ['name' => 'teachers.store', 'description' => 'Store a new teacher', 'is_default' => false],
        ['name' => 'teachers.show', 'description' => 'Show teacher', 'is_default' => false],
        ['name' => 'teachers.edit', 'description' => 'Edit teacher', 'is_default' => false],
        ['name' => 'teachers.update', 'description' => 'Update teacher', 'is_default' => false],
        ['name' => 'teachers.destroy', 'description' => 'Delete teacher', 'is_default' => false],
        ['name' => 'teachers.initTable', 'description' => 'Init table for teachers', 'is_default' => false],

        ['name' => 'teachers.tableData', 'description' => 'Get table data for teachers', 'is_default' => false],

        ['name' => 'teachers.exportExcel', 'description' => 'Export excel for teachers', 'is_default' => false],

        ['name' => 'teachers.options', 'description' => 'Get teacher options for select', 'is_default' => false],
    ];

    protected $menu = [
        'name' => 'Teachers', 'icon' => 'cogs', 'route' => 'teachers.index', 'order_index' => 202, 'has_children' => false
    ];

    protected $parentMenu = '';
}

