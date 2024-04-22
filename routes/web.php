<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ItemController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function(){
    return view('dashboard');
});


Route::resource('company', \App\Http\Controllers\CompanyController::class);
Route::get('list/company', [CompanyController::class,'listCompanies']);
Route::post('company/remove', [CompanyController::class, 'deleteCompanyInstance'])->name('company.deleteCompanyInstance');
Route::get('edit/company/{id}', [CompanyController::class, 'editCompany'])->name('company.edit');
Route::resource('items', \App\Http\Controllers\ItemController::class);
Route::post('items/delete', [ItemController::class, 'deleteItem'])->name("items.deleteItem");
Route::get('item-type/create', [\App\Http\Controllers\ItemTypeController::class, 'create']);
Route::post('item-type/create', [\App\Http\Controllers\ItemTypeController::class, 'store'])->name('item-type.store');
Route::get('orders/purchase-order/create', [\App\Http\Controllers\PurchaseOrderController::class, 'create']);
Route::post('orders/purchase-order/create', [\App\Http\Controllers\PurchaseOrderController::class, 'store'])->name('store-purchase-order');
