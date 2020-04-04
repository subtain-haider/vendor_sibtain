<?php

use LaravelEnso\Migrator\App\Database\Migration;

class CreateStructureForClassrooms extends Migration
{
    protected $permissions = [
        ['name' => 'administration.classrooms.initTable', 'description' => 'Init table for classrooms', 'is_default' => false],
        ['name' => 'administration.classrooms.tableData', 'description' => 'Get table data for classrooms', 'is_default' => false],
        ['name' => 'administration.classrooms.exportExcel', 'description' => 'Export excel for classrooms', 'is_default' => false],
        ['name' => 'administration.classrooms.options', 'description' => 'Get options for select', 'is_default' => false],
        ['name' => 'administration.classrooms.create', 'description' => 'Create classroom', 'is_default' => false],
        ['name' => 'administration.classrooms.edit', 'description' => 'Edit existing classroom', 'is_default' => false],
        ['name' => 'administration.classrooms.index', 'description' => 'Show classrooms', 'is_default' => false],
        ['name' => 'administration.classrooms.store', 'description' => 'Store newly created classroom', 'is_default' => false],
        ['name' => 'administration.classrooms.update', 'description' => 'Update edited classroom', 'is_default' => false],
        ['name' => 'administration.classrooms.destroy', 'description' => 'Delete classroom', 'is_default' => false],
    ];

    protected $menu = [
        'name' => 'Classrooms', 'icon' => 'building', 'route' => 'administration.classrooms.index', 'order_index' => 250, 'has_children' => false,
    ];

    protected $parentMenu = 'Administration';
}
