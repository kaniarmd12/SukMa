<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BussinesController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BusinessSubmissionController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\OutputController;
use App\Http\Controllers\Admin\BusinessApprovalController;


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
    return view('auth.register3');
});

Route::group(['middleware' => 'auth'], function(){


Route::get('/owner/ProductCategory', [ProductCategoryController::Class, 'index'])->name('ProductCategory');
Route::get('/owner/ProductCategory/create', [ProductCategoryController::Class, 'create'])->name('productCategory.create');
Route::post('/owner/ProductCategory/create', [ProductCategoryController::Class, 'store'])->name('productCategory.store');
Route::delete('/owner/ProductCategory/{id}/destroy', [ProductCategoryController::Class, 'destroy'])->name('productCategory.destroy');
Route::get('/owner/ProductCategory/{id}/edit', [ProductCategoryController::Class, 'edit'])->name('productCategory.edit'); 
Route::post('/owner/ProductCategory/{id}/edit', [ProductCategoryController::Class, 'update'])->name('productCategory.update'); 
 
Route::get('/owner/Product', [ProductController::Class, 'index'])->name('Product');
Route::get('/owner/Product/create', [ProductController::Class, 'create'])->name('product.create');
Route::post('/owner/Product/create', [ProductController::Class, 'store'])->name('product.create');
Route::get('/owner/Product/{id}/edit', [ProductController::Class, 'edit'])->name('product.edit'); 
Route::post('/owner/Product/{id}/edit', [ProductController::Class, 'update'])->name('product.update'); 
Route::delete('/owner/Product/{id}/destroy', [Product::Class, 'destroy'])->name('product.destroy');

Route::get('/owner/bussines', [BussinesController::Class, 'index'])->name('bussines');
Route::delete('/owner/bussines/{id}/destroy', [bussines::Class, 'destroy'])->name('bussines.destroy');

Route::get('/owner/BussinesSubmission', [BusinessSubmissionController::Class, 'index'])->name('business_submissions');
Route::get('/owner/BussinesSubmission/create', [BusinessSubmissionController::Class, 'create'])->name('business_submissions.create');
Route::post('/owner/BussinesSubmission/create', [BusinessSubmissionController::Class, 'store'])->name('business_submissions.create');


Route::get('/owner/order', [OrderController::Class, 'index'])->name('order');
Route::get('/owner/order/create', [OrderController::Class, 'create'])->name('order.create');
Route::post('/owner/order/create', [OrderController::Class, 'store'])->name('order.create');

Route::get('/owner/income', [IncomeController::Class, 'index'])->name('income');
Route::get('/owner/income/create', [IncomeController::Class, 'create'])->name('income.create');
Route::post('/owner/income/create', [IncomeController::Class, 'store'])->name('income.create');

Route::get('/owner/output', [OutputController::Class, 'index'])->name('output');
Route::get('/owner/output/create', [OutputController::Class, 'create'])->name('output.create');
Route::post('/owner/output/create', [OutputController::Class, 'store'])->name('output.create');
Route::get('/owner/output/{id}/edit', [OutputController::Class, 'edit'])->name('output.edit'); 
Route::post('/owner/output/{id}/edit', [OutputController::Class, 'update'])->name('output.update'); 
Route::delete('/owner/output/{id}/destroy', [OutputController::Class, 'destroy'])->name('output.destroy');

Route::get('/admin/Business_Approval', [BusinessApprovalController::Class, 'index'])->name('Business_Approval');
Route::get('/admin/Business_Approval/{id}/detail', [BusinessApprovalController::Class, 'detail'])->name('Business_Approval');
Route::get('/admin/Business_Approval/{id}/approve', [BusinessApprovalController::Class, 'approve'])->name('Business_Approval');
Route::delete('/admin/Business_Approval/{id}/destroy', [BusinessApprovalController::Class, 'destroy'])->name('Business_Approval.destroy');

});