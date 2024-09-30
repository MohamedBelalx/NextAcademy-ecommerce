<?php

use App\Http\Controllers\TradeMarkController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// trademark routes
Route::get('/trademark/create', [TradeMarkController::class, 'create'])->name('trademark.create');
Route::get('/trademark/index', [TradeMarkController::class, 'index'])->name('trademark.index');
Route::post('/trademark/store', [TradeMarkController::class, 'store'])->name('trademark.store');
Route::get('/trademark/destroy/{id}', [TradeMarkController::class, 'destroy'])->name('trademark.destroy');
Route::get('/trademark/edit/{id}', [TradeMarkController::class, 'edit'])->name('trademark.edit');
Route::post('/trademark/update/{id}', [TradeMarkController::class, 'update'])->name('trademark.update');


// products routes

Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
Route::get('/products/index', [ProductsController::class, 'index'])->name('products.index');
Route::post('/products/store', [ProductsController::class, 'store'])->name('products.store');
Route::get('/products/destroy/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');
Route::get('/products/edit/{id}', [ProductsController::class, 'edit'])->name('products.edit');
Route::post('/products/update/{id}', [ProductsController::class, 'update'])->name('products.update');
