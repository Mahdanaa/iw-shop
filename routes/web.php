<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;


Route::middleware('[auth]')->prefix('admin')(function () {
   Route::get('/dashboard',function(){
    return view('dashboard');
   })->name('dashboard');

   Route::resource('categorires',CategoryController::class);
   Route::resource('products',ProductController::class);
   Route::resource('supplliers',SupplierController::class);

});


require __DIR__.'/auth.php';
