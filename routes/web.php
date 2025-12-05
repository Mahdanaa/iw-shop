<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\Customer;
use App\Http\Controllers\Transaction;


Route::get('/', function () {
    return auth('web')->check() ? redirect('/admin/dashboard') : redirect('/register');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
   Route::get('/dashboard',function(){
    return view('dashboard');
   })->name('dashboard');

   Route::resource('categories',CategoryController::class);
   Route::resource('products',ProductController::class);
   Route::resource('suppliers',SupplierController::class);
   Route::resource('customers',Customer::class);
   Route::resource('transactions',Transaction::class);

});


require __DIR__.'/auth.php';
