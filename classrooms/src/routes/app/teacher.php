<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Teacher')
    ->group(function () {
        Route::prefix('teachers')
            ->as('teachers.')
            ->group(function () {
                Route::get('{classroom}', 'Index')->name('index');
                Route::get('{classroom}/create', 'Create')->name('create');
                Route::get('{classroom}/{teacher}/edit', 'Edit')->name('edit');
                Route::patch('{teacher}', 'Update')->name('update');
                Route::post('', 'Store')->name('store');
                Route::delete('{classroom}/{teacher}', 'Destroy')->name('destroy');
            });
    });
