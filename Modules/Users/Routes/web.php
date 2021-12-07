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
use Modules\Users\Http\Controllers\ServiceController;

 Route::middleware(['auth','userAdmin'])->group(function () {
    Route::prefix('Users')->group(function() {

        Route::get('/', 'UsersController@index')->name('users.index');
        Route::get('/create', 'UsersController@create')->name('users.create');

        Route::get('/service', [ServiceController::class,'index'])->name('service.index');
        Route::get('/service/create', [ServiceController::class,'create'])->name('service.create');
        Route::post('/service', [ServiceController::class,'store'])->name('service.store');

        Route::get('/service/edit/{id}', [ServiceController::class,'edit'])->name('service.edit');

        Route::post('/service/{id}/update', [ServiceController::class,'update'])->name('service.update');
    });
 });



