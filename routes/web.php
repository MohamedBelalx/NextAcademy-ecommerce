<?php

use App\Http\Controllers\TradeMarkController;
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

Route::get('/trademark/create', [TradeMarkController::class, 'create'])->name('trademark.create');
Route::get('/trademark/index', [TradeMarkController::class, 'index'])->name('trademark.index');
Route::post('/trademark/store', [TradeMarkController::class, 'store'])->name('trademark.store');
