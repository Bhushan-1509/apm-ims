<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('company', \App\Http\Controllers\CompanyController::class);
