<?php

use App\Http\Controllers\AdminController\DashboardController;
use App\Http\Controllers\AdminController\ProductController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::get('/product', [ProductPageController::class, 'index'])->name('product');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('admin.dashboard');

    Route::prefix('products')->name('admin.products.')->group(function() {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/create', [ProductController::class, 'create'])->name('create');
        Route::post('/store', [ProductController::class, 'store'])->name('store');
        Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
        Route::put('/update/{product}', [ProductController::class, 'update'])->name('update');
        Route::delete('/{product}', [ProductController::class, 'destroy'])->name('destroy');
    });
        
});
