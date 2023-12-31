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
    
    //Create product
    Route::get('/createProduct',[ProductsController::class, 'createProduct'])->name('create.product');
    Route::post('/createProduct',[ProductsController::class, 'createProduct'])->name('create.product');

    //Desactivate product
    Route::get('/updateProduct/{id}',[ProductsController::class, 'index'])->name('index');
    Route::post('/desactivateProduct/{id}',[ProductsController::class, 'desactivateProduct'])->name('product.desactivate');

    //Update
    Route::get('/updateProduct/{id}',[ProductsController::class, 'index'])->name('index');
    Route::post('/updateProduct/{id}',[ProductsController::class, 'updateProduct'])->name('product.update');
});

Route::prefix('settings')->group(function(){
    Route::get('/',[SettingsController::class, 'index'])->name('settings.index');
});