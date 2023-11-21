<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;



Route::get('/', function () {
    return view('frontend.home.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth', 'user'])->name('home');

// admin route start here
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);

    //category
    Route::get('/category/list', [CategoryController::class, 'categoryList'])->name('admin.cateogory.list');
    Route::get('/category/create', [CategoryController::class, 'categoryCreate'])->name('admin.cateogory.create');
    Route::post('/category/store', [CategoryController::class, 'categoryStore'])->name('admin.category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'categoryEdit'])->name('admin.category.edit');
    Route::post('/category/update', [CategoryController::class, 'categoryUpdate'])->name('admin.category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'categoryDelete'])->name('admin.category.delete');

    //brand
    Route::get('/brand/list', [BrandController::class, 'brandList'])->name('admin.brand.list');
    Route::get('/brand/create', [BrandController::class, 'brandCreate'])->name('admin.brand.create');
    Route::post('/brand/store', [BrandController::class, 'brandStore'])->name('admin.brand.store');
    Route::get('/brand/edit/{id}', [BrandController::class, 'brandEdit'])->name('admin.brand.edit');
    Route::post('/brand/update', [BrandController::class, 'brandUpdate'])->name('admin.brand.update');
    Route::get('/brand/delete/{id}', [BrandController::class, 'brandDelete'])->name('admin.brand.delete');
});
