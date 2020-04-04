<?php

use LaravelEnso\Migrator\App\Database\Migration;

class CreateStructureForClassRooms extends Migration
{
    protected $permissions = [
        ['name' => 'classroom.index', 'description' => 'Show index for class rooms', 'is_default' => false],

        ['name' => 'classroom.create', 'description' => 'Create class room', 'is_default' => false],
        ['name' => 'classroom.store', 'description' => 'Store a new class room', 'is_default' => false],
        ['name' => 'classroom.show', 'description' => 'Show class room', 'is_default' => false],
        ['name' => 'classroom.edit', 'description' => 'Edit class room', 'is_default' => false],
        ['name' => 'classroom.update', 'description' => 'Update class room', 'is_default' => false],
        ['name' => 'classroom.destroy', 'description' => 'Delete class room', 'is_default' => false],
        ['name' => 'classroom.initTable', 'description' => 'Init table for class rooms', 'is_default' => false],

        ['name' => 'classroom.tableData', 'description' => 'Get table data for class rooms', 'is_default' => false],

        ['name' => 'classroom.exportExcel', 'description' => 'Export excel for class rooms', 'is_default' => false],

        ['name' => 'classroom.options', 'description' => 'Get class room options for select', 'is_default' => false],
    ];

    protected $menu = [
        'name' => 'Classes', 'icon' => 'cogs', 'route' => 'classroom.index', 'order_index' => 202, 'has_children' => false
    ];

    protected $parentMenu = '';
}

