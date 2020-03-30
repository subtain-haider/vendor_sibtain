<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('Sibtain\Subjects\App\Http\Controllers\Subjects')
            ->prefix('api/subjects')
            ->as('subjects.')
            ->group(function () {

//		Route::get('', 'Index')->name('index');
		Route::get('create', 'Create')->name('create');
		Route::post('', 'Store')->name('store');
		Route::get('{subject}/edit', 'Edit')->name('edit');

		Route::patch('{subject}', 'Update')->name('update');

		Route::delete('{subject}', 'Destroy')->name('destroy');

		Route::get('initTable', 'InitTable')->name('initTable');
		Route::get('tableData', 'TableData')->name('tableData');
		Route::get('exportExcel', 'ExportExcel')->name('exportExcel');

		Route::get('options', 'Options')->name('options');
		Route::get('{subject}', 'Show')->name('show');


        });
    });
