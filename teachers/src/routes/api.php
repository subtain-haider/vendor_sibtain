<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('Sibtain\Teachers\App\Http\Controllers\Teacher')
            ->prefix('api/teacher')
            ->as('teacher.')
            ->group(function () {

//		Route::get('', 'Index')->name('index');
		Route::get('create', 'Create')->name('create');
		Route::post('', 'Store')->name('store');
		Route::get('{teacher}/edit', 'Edit')->name('edit');

		Route::patch('{teacher}', 'Update')->name('update');

		Route::delete('{teacher}', 'Destroy')->name('destroy');

		Route::get('initTable', 'InitTable')->name('initTable');
		Route::get('tableData', 'TableData')->name('tableData');
		Route::get('exportExcel', 'ExportExcel')->name('exportExcel');

		Route::get('options', 'Options')->name('options');
		Route::get('{teacher}', 'Show')->name('show');


        });
    });
