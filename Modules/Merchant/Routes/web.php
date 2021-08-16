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

// Route::middleware(['auth', 'merchatAdmin'])->group(function () {
    Route::prefix('merchant')->group(function() {
        Route::get('/', 'MerchantController@index');
        Route::get('/ware-house', [WareHouseController::class,'index'])->name('wareHouse.index');
        Route::post('/ware-house', [WareHouseController::class,'store'])->name('ware-Houses.store');
        Route::get('/warehousecategory',[WareHouseCategoryController::class,'index'])->name('warehousecategory.index');

    });
// });
