<?php

use LaravelEnso\Migrator\App\Database\Migration;

class CreateStructureForSubjects extends Migration
{
    protected $permissions = [
        ['name' => 'subjects.index', 'description' => 'Show index for subjects', 'is_default' => false],

        ['name' => 'subjects.create', 'description' => 'Create subject', 'is_default' => false],
        ['name' => 'subjects.store', 'description' => 'Store a new subject', 'is_default' => false],
        ['name' => 'subjects.show', 'description' => 'Show subject', 'is_default' => false],
        ['name' => 'subjects.edit', 'description' => 'Edit subject', 'is_default' => false],
        ['name' => 'subjects.update', 'description' => 'Update subject', 'is_default' => false],
        ['name' => 'subjects.destroy', 'description' => 'Delete subject', 'is_default' => false],
        ['name' => 'subjects.initTable', 'description' => 'Init table for subjects', 'is_default' => false],

        ['name' => 'subjects.tableData', 'description' => 'Get table data for subjects', 'is_default' => false],

        ['name' => 'subjects.exportExcel', 'description' => 'Export excel for subjects', 'is_default' => false],

        ['name' => 'subjects.options', 'description' => 'Get subject options for select', 'is_default' => false],
    ];

    protected $menu = [
        'name' => 'Subjects', 'icon' => 'cogs', 'route' => 'subjects.index', 'order_index' => 201, 'has_children' => false
    ];

    protected $parentMenu = '';
}

