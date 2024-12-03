<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BussinesController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/gg',function ( ){
    return view('check');
});


Route::get('/master',function(){
    return view('admin.profile.contents');

});

Route::get('/login2', function () {
    return view('auth.login2');
});

Route::get('/register2', function () {
    return view('auth.register2');
});

Route::group(['middleware' => 'auth'], function(){

Route::get('/admin/bussines', [BussinesController::Class, 'index'])->name('bussines');
Route::get('/admin/ProductCategory', [ProductCategoryController::Class, 'index'])->name('ProductCategory');
Route::get('/admin/ProductCategory/create', [ProductCategoryController::Class, 'create'])->name('productCategory.create');
Route::post('/admin/ProductCategory/create', [ProductCategoryController::Class, 'store'])->name('productCategory.store');
Route::delete('/admin/ProductCategory/{id}/destroy', [ProductCategoryController::Class, 'destroy'])->name('productCategory.destroy');
Route::get('/admin/ProductCategory/{id}/edit', [ProductCategoryController::Class, 'edit'])->name('productCategory.edit'); 
Route::post('/admin/ProductCategory/{id}/edit', [ProductCategoryController::Class, 'update'])->name('productCategory.update'); 

Route::get('/admin/Product', [ProductController::Class, 'index'])->name('Product');
Route::get('/admin/Product/create', [ProductController::Class, 'create'])->name('product.create');
Route::post('/admin/Product/create', [ProductController::Class, 'store'])->name('product.create');

});