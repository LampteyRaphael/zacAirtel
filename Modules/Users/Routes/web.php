<?php

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

use Illuminate\Support\Facades\Route;
use Modules\Users\Http\Controllers\BrandsController;
use Modules\Users\Http\Controllers\CategoryController;
use Modules\Users\Http\Controllers\InventoryController;
use Modules\Users\Http\Controllers\ItemsController;
use Modules\Users\Http\Controllers\WareHouseController;
use Modules\Users\Http\Controllers\WareHouseRequestController;
use Modules\Users\Http\Controllers\PointOfSaleController;

 Route::middleware(['auth','userAdmin'])->group(function () {
    Route::prefix('Users')->group(function() {
        Route::get('/', 'UsersController@index')->name('users.index');
        Route::get('/create', 'UsersController@create')->name('users.create');
        Route::get('/ware-house', [WareHouseController::class,'index'])->name('warehouse.index');
        Route::post('/ware-house', [WareHouseController::class,'store'])->name('warehouse.store');

        Route::get('/brands', [BrandsController::class,'index'])->name('brands.index');
        Route::post('/brands', [BrandsController::class,'store'])->name('brands.store');
        Route::get('/items', [ItemsController::class,'index'])->name('item.index');
        Route::get('/items/create', [ItemsController::class,'create'])->name('item.create');
        Route::post('/items', [ItemsController::class,'store'])->name('item.store');
        Route::get('/items/{id}', [ItemsController::class,'destroy'])->name('item.destroy');
        Route::get('/category', [CategoryController::class,'index'])->name('category.index');
        Route::post('/category', [CategoryController::class,'store'])->name('category.store');

        Route::get('/user-inventory',[InventoryController::class,'index'])->name('user-inventory.index');
        Route::post('/user-inventory',[InventoryController::class,'store'])->name('user-inventory.store');
        Route::get('/user-inventory/{id}/edit',[InventoryController::class,'edit'])->name('user-inventory.edit');
        Route::post('/user-inventory/{id}',[InventoryController::class,'update'])->name('user-inventory.update');
        Route::get('/user-inventory/{id}',[InventoryController::class,'destroy'])->name('user-inventory.destroy');

        Route::get('/wareHouseRequest',[WareHouseRequestController::class,'index'])->name('wareHouseRequest.index');
        Route::get('/wareHouseRequest/create',[WareHouseRequestController::class,'create'])->name('wareHouseRequest.create');
        Route::get('/wareHouseRequest/reject',[WareHouseRequestController::class,'reject'])->name('wareHouseRequest.reject');
        Route::get('/wareHouseRequest/{id}/pending',[WareHouseRequestController::class,'show'])->name('wareHouseRequest.show');
        Route::post('/wareHouseRequest/{id}',[WareHouseRequestController::class,'update'])->name('wareHouseRequest.update');
        Route::get('/wareHouseRequest/{id}',[WareHouseRequestController::class,'destroy'])->name('wareHouseRequest.destroy');
        Route::get('/userpointofsale',[PointOfSaleController::class,'index'])->name('userpointofsale.index');
        Route::post('/userpointofsale',[PointOfSaleController::class,'store'])->name('userpointofsale.store');




    });
 });



