<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Student')
    ->group(function () {
        Route::prefix('students')
            ->as('students.')
            ->group(function () {
                Route::get('{classroom}', 'Index')->name('index');
                Route::get('{classroom}/create', 'Create')->name('create');
                Route::get('{classroom}/{student}/edit', 'Edit')->name('edit');
                Route::patch('{student}', 'Update')->name('update');
                Route::post('', 'Store')->name('store');
                Route::delete('{classroom}/{student}', 'Destroy')->name('destroy');
            });
    });
