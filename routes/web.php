<?php

use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//HOME
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product');


//ADMIN
Route::delete('/admin/product/{product:slug}', [AdminProductController::class, 'destroy'])->name('admin.products.destroy');
Route::patch('/admin/product/{product:slug}', [AdminProductController::class, 'update'])->name('admin.products.update');
Route::get('/admin/product/{product:slug}/edit', [AdminProductController::class, 'edit'])->name('admin.products.edit');
Route::post('/admin/product', [AdminProductController::class, 'store'])->name('admin.products.store');
Route::get('/admin/product/create', [AdminProductController::class, 'create'])->name('admin.products.create');
Route::get('/admin/product', [AdminProductController::class, 'index'])->name('admin.products');