<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('Sibtain\Grades\App\Http\Controllers\Grades')
            ->prefix('api/grades')
            ->as('grades.')
            ->group(function () {
                
		Route::get('', 'Index')->name('index');
		Route::get('create', 'Create')->name('create');
		Route::post('', 'Store')->name('store');
		Route::get('{grade}/edit', 'Edit')->name('edit');

		Route::patch('{grade}', 'Update')->name('update');

		Route::delete('{grade}', 'Destroy')->name('destroy');

		Route::get('initTable', 'InitTable')->name('initTable');
		Route::get('tableData', 'TableData')->name('tableData');
		Route::get('exportExcel', 'ExportExcel')->name('exportExcel');

		Route::get('options', 'Options')->name('options');
		Route::get('{grade}', 'Show')->name('show');


        });
    });