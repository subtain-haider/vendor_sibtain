<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Sibtain\Classrooms\App\Http\Controllers')
    ->middleware(['web', 'auth', 'core'])
    ->prefix('api/administration/classrooms')
    ->as('administration.classrooms.')
    ->group(function () {
        require 'app/classrooms.php';
        require 'app/teacher.php';
    });
