<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('Sibtain\Students\App\Http\Controllers\Students')
            ->prefix('api/students')
            ->as('students.')
            ->group(function () {
                
		Route::get('', 'Index')->name('index');
		Route::get('create', 'Create')->name('create');
		Route::post('', 'Store')->name('store');
		Route::get('{student}/edit', 'Edit')->name('edit');

		Route::patch('{student}', 'Update')->name('update');

		Route::delete('{student}', 'Destroy')->name('destroy');

		Route::get('initTable', 'InitTable')->name('initTable');
		Route::get('tableData', 'TableData')->name('tableData');
		Route::get('exportExcel', 'ExportExcel')->name('exportExcel');

		Route::get('options', 'Options')->name('options');
		Route::get('{student}', 'Show')->name('show');


        });
    });