<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('Sibtain\Classroom\App\Http\Controllers\Classroom')
            ->prefix('api/classroom')
            ->as('classroom.')
            ->group(function () {

//		Route::get('', 'Index')->name('index');
		Route::get('create', 'Create')->name('create');
		Route::post('', 'Store')->name('store');
		Route::get('{classRoom}/edit', 'Edit')->name('edit');

		Route::patch('{classRoom}', 'Update')->name('update');

		Route::delete('{classRoom}', 'Destroy')->name('destroy');

		Route::get('initTable', 'InitTable')->name('initTable');
		Route::get('tableData', 'TableData')->name('tableData');
		Route::get('exportExcel', 'ExportExcel')->name('exportExcel');

		Route::get('options', 'Options')->name('options');
		Route::get('{classRoom}', 'Show')->name('show');


        });
    });
