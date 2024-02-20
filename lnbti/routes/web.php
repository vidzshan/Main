<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\LecturerController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/lecturer', LecturerController::class);
