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
use Modules\Merchant\Http\Controllers\WareHouseCategoryController;
use Modules\Merchant\Http\Controllers\WareHouseController;
use Modules\Merchant\Http\Controllers\WareHouseCustolersController;

Route::middleware(['auth', 'merchatAdmin'])->group(function () {
    Route::prefix('merchant')->group(function() {
        Route::get('/', 'MerchantController@index')->name('merchant.index');
        Route::get('/ware-house', [WareHouseController::class,'index'])->name('wareHouse.index');
        Route::post('/ware-house', [WareHouseController::class,'store'])->name('ware-Houses.store');
        Route::get('/warehousecategory',[WareHouseCategoryController::class,'index'])->name('warehousecategory.index');
        Route::get('/warehouseCustomers/pending',[WareHouseCustolersController::class,'pending'])->name('warehousecategory.pending');
        Route::get('/warehouseCustomers/approved',[WareHouseCustolersController::class,'approved'])->name('warehousecategory.approved');
        Route::get('/warehouseCustomers/rejected',[WareHouseCustolersController::class,'rejected'])->name('warehousecategory.rejected');

        Route::get('/warehouseCustomers/{id}/edit',[WareHouseCustolersController::class,'edit'])->name('warehousecategory.edit');
        Route::post('/warehouseCustomers/{id}/update',[WareHouseCustolersController::class,'update'])->name('warehousecategory.update');
        Route::get('/warehouseCustomers/{id}',[WareHouseCustolersController::class,'destroy'])->name('warehousecategory.destroy');

    });
 });
