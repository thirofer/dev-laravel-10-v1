<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SettingsController;
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
    return view('index');
});


Route::prefix('products')->group(function(){
    Route::get('/',[ProductsController::class, 'index'])->name('products.index');
});

Route::prefix('settings')->group(function(){
    Route::get('/',[SettingsController::class, 'index'])->name('settings.index');
});