<?php

use App\Http\Controllers\ProfileController;
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
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile-setting',[App\Http\Controllers\UsersController::class, 'profile_setting'])->middleware('auth');
Route::post('/profile-setting',[App\Http\Controllers\UsersController::class, 'profile_update'])->middleware('auth');

Route::group(['prefix' => 'customer'], function() {
    Route::get('/',[App\Http\Controllers\CustomerController::class, 'index'])->middleware('auth');
    Route::get('/detail/{id}',[App\Http\Controllers\CustomerController::class, 'show'])->middleware('auth');
    Route::get('/new',[App\Http\Controllers\CustomerController::class, 'create'])->middleware('auth');
    Route::post('/store',[App\Http\Controllers\CustomerController::class, 'store'])->middleware('auth');
    Route::get('/edit/{id}',[App\Http\Controllers\CustomerController::class, 'edit'])->middleware('auth');
    Route::post('/update',[App\Http\Controllers\CustomerController::class, 'update'])->middleware('auth');
    Route::get('/delete/{id}',[App\Http\Controllers\CustomerController::class, 'delete'])->middleware('auth');
});

Route::group(['prefix' => 'customer-portal'], function() {
    Route::get('/',[App\Http\Controllers\CustomerPortalController::class, 'login'])->middleware('auth');
    Route::get('/dashboard',[App\Http\Controllers\CustomerPortalController::class, 'index'])->middleware('auth');
    Route::get('/detail-so/',[App\Http\Controllers\CustomerPortalController::class, 'detailso'])->middleware('auth');
    Route::get('/detail-po',[App\Http\Controllers\CustomerPortalController::class, 'detailpo'])->middleware('auth');
    Route::post('/store',[App\Http\Controllers\CustomerPortalController::class, 'store'])->middleware('auth');
    Route::get('/edit/',[App\Http\Controllers\CustomerPortalController::class, 'edit'])->middleware('auth');
    Route::post('/update',[App\Http\Controllers\CustomerPortalController::class, 'update'])->middleware('auth');
    Route::get('/delete/',[App\Http\Controllers\CustomerPortalController::class, 'delete'])->middleware('auth');
});


Route::group(['prefix' => 'product'], function() {
    Route::get('/',[App\Http\Controllers\ProductController::class, 'index'])->middleware('auth');
    Route::get('/detail/',[App\Http\Controllers\ProductController::class, 'show'])->middleware('auth');
    Route::get('/new',[App\Http\Controllers\ProductController::class, 'create'])->middleware('auth');
    Route::post('/store',[App\Http\Controllers\ProductController::class, 'store'])->middleware('auth');
    Route::get('/edit/{id}',[App\Http\Controllers\ProductController::class, 'edit'])->middleware('auth');
    Route::post('/update',[App\Http\Controllers\ProductController::class, 'update'])->middleware('auth');
    Route::get('/delete/{id}',[App\Http\Controllers\ProductController::class, 'delete'])->middleware('auth');
});

Route::group(['prefix' => 'sample'], function() {
    Route::get('/',[App\Http\Controllers\SampleController::class, 'index'])->middleware('auth');
    Route::get('/detail/',[App\Http\Controllers\SampleController::class, 'show'])->middleware('auth');
    Route::get('/new',[App\Http\Controllers\SampleController::class, 'create'])->middleware('auth');
    Route::post('/store',[App\Http\Controllers\SampleController::class, 'store'])->middleware('auth');
    Route::get('/edit/{id}',[App\Http\Controllers\SampleController::class, 'edit'])->middleware('auth');
    Route::post('/update',[App\Http\Controllers\SampleController::class, 'update'])->middleware('auth');
    Route::get('/delete/{id}',[App\Http\Controllers\SampleController::class, 'delete'])->middleware('auth');
});

Route::group(['prefix' => 'sales-order'], function() {
    Route::get('/',[App\Http\Controllers\SalesOrderController::class, 'index'])->middleware('auth');
    Route::get('/detail/',[App\Http\Controllers\SalesOrderController::class, 'show'])->middleware('auth');
    Route::get('/detail-product/',[App\Http\Controllers\SalesOrderController::class, 'showproduct'])->middleware('auth');
    Route::get('/new',[App\Http\Controllers\SalesOrderController::class, 'create'])->middleware('auth');
    Route::post('/store',[App\Http\Controllers\SalesOrderController::class, 'store'])->middleware('auth');
    Route::get('/edit/{id}',[App\Http\Controllers\SalesOrderController::class, 'edit'])->middleware('auth');
    Route::post('/update',[App\Http\Controllers\SalesOrderController::class, 'update'])->middleware('auth');
    Route::get('/delete/{id}',[App\Http\Controllers\SalesOrderController::class, 'delete'])->middleware('auth');
});


Route::group(['prefix' => 'user'], function() {
    Route::get('/',[App\Http\Controllers\UsersController::class, 'index'])->middleware('auth');
    Route::get('/detail/{id}',[App\Http\Controllers\UsersController::class, 'show'])->middleware('auth');
    Route::get('/new',[App\Http\Controllers\UsersController::class, 'create'])->middleware('auth');
    Route::post('/store',[App\Http\Controllers\UsersController::class, 'store'])->middleware('auth');
    Route::get('/edit/{id}',[App\Http\Controllers\UsersController::class, 'edit'])->middleware('auth');
    Route::post('/update',[App\Http\Controllers\UsersController::class, 'update'])->middleware('auth');
    Route::get('/delete/{id}',[App\Http\Controllers\UsersController::class, 'delete'])->middleware('auth');
});

Route::group(['prefix' => 'dashboard'], function() {
    Route::get('/marketing',[App\Http\Controllers\TemporaryController::class, 'marketing'])->middleware('auth');
    Route::get('/regulator',[App\Http\Controllers\TemporaryController::class, 'regulator'])->middleware('auth');
    Route::get('/product',[App\Http\Controllers\TemporaryController::class, 'product'])->middleware('auth');
    Route::get('/finance',[App\Http\Controllers\TemporaryController::class, 'finance'])->middleware('auth');
    Route::get('/production',[App\Http\Controllers\TemporaryController::class, 'production'])->middleware('auth');
    Route::get('/design',[App\Http\Controllers\TemporaryController::class, 'design'])->middleware('auth');
    Route::get('/warehouse',[App\Http\Controllers\TemporaryController::class, 'warehouse'])->middleware('auth');
});

Route::group(['prefix' => 'roles'], function() {
    Route::get('/',[App\Http\Controllers\RolesController::class, 'index'])->middleware('auth');
    Route::post('/store',[App\Http\Controllers\RolesController::class, 'store'])->middleware('auth');
    Route::get('/edit/{id}',[App\Http\Controllers\RolesController::class, 'edit'])->middleware('auth');
    Route::post('/update',[App\Http\Controllers\RolesController::class, 'update'])->middleware('auth');
    Route::get('/delete/{id}',[App\Http\Controllers\RolesController::class, 'delete'])->middleware('auth');
});
require __DIR__.'/auth.php';
