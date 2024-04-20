<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function(){
    return view('dashboard');
});


Route::resource('company', \App\Http\Controllers\CompanyController::class);
Route::resource('items', \App\Http\Controllers\ItemController::class);

Route::get('item-type/create', [\App\Http\Controllers\ItemTypeController::class, 'create']);
Route::get('orders/purchase-order/create', [\App\Http\Controllers\PurchaseOrderController::class, 'create']);
