<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function()
{
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
// category route

Route::controller(App\Http\Controllers\Admin\ProductCategoryController::class)->group(function () {
    Route::get('/category', 'index');
    Route::post('/category', 'store');
    Route::get('/category/create', 'create');
    Route::get('/category/{cat}/edit', 'edit');
    Route::get('/category/{cat}/delete', 'delete');
    Route::put('/category/{cat}', 'update');
});

// product

Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function () {

    Route::get('/products', 'index');
    Route::get('/product/create', 'create');
}); 

// atrtributes

Route::controller(App\Http\Controllers\Admin\ProductAttributesController::class)->group(function () {

    Route::get('/attributes', 'index');
    Route::get('/attributes/create', 'create');
    Route::post('/attributes', 'store');
    Route::get('/attributes/{attri}/edit', 'edit');
    Route::get('/attributes/{attri}/delete', 'delete');
    Route::put('/attributes/{attri}', 'update');
    Route::get('/attributes/{attri}/add', 'add');
   
});

// attributes value

Route::controller(App\Http\Controllers\Admin\ProductAttributesValueController::class)->group(function () {
    
    Route::get('/attributes_value', 'valuestore');
   
   
});



// coupon
Route::controller(App\Http\Controllers\Admin\ProductCouponsController::class)->group(function () {
    Route::get('/coupons', 'index');
    Route::post('/coupons', 'store');
    Route::get('/coupons/create', 'create');
    Route::get('/coupons/{coupons}/edit', 'edit');
    Route::get('/coupons/{coupons}/delete', 'delete');
    Route::put('/coupons/{coupons}', 'update');
});
    
});
