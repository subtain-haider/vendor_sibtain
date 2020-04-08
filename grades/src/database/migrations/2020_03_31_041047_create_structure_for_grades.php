<?php

use LaravelEnso\Migrator\App\Database\Migration;

class CreateStructureForGrades extends Migration
{
    protected $permissions = [
        ['name' => 'grades.index', 'description' => 'Show index for grades', 'is_default' => false],

        ['name' => 'grades.create', 'description' => 'Create grade', 'is_default' => false],
        ['name' => 'grades.store', 'description' => 'Store a new grade', 'is_default' => false],
        ['name' => 'grades.show', 'description' => 'Show grade', 'is_default' => false],
        ['name' => 'grades.edit', 'description' => 'Edit grade', 'is_default' => false],
        ['name' => 'grades.update', 'description' => 'Update grade', 'is_default' => false],
        ['name' => 'grades.destroy', 'description' => 'Delete grade', 'is_default' => false],
        ['name' => 'grades.initTable', 'description' => 'Init table for grades', 'is_default' => false],

        ['name' => 'grades.tableData', 'description' => 'Get table data for grades', 'is_default' => false],

        ['name' => 'grades.exportExcel', 'description' => 'Export excel for grades', 'is_default' => false],

        ['name' => 'grades.options', 'description' => 'Get grade options for select', 'is_default' => false],
    ];

    protected $menu = [
        'name' => 'Grades', 'icon' => 'cogs', 'route' => 'grades.index', 'order_index' => 220, 'has_children' => false
    ];

    protected $parentMenu = '';
}

