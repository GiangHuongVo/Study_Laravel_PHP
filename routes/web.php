<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product',[ProductController::class, 'index'])->name('product.index');
// Get a product detail to create form => create a product page
Route::get('/product/create',[ProductController::class, 'create'])->name('product.create');
// Method post to create a product
Route::post('/product',[ProductController::class, 'store'])->name('product.store');
// Get a product detail to edit form route=> edit page
Route::get('/product/{product}/edit',[ProductController::class, 'edit'])->name('product.edit');
// Action: edit route
Route::put('/product/{product}/update',[ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/destroy',[ProductController::class, 'destroy'])->name('product.destroy');
