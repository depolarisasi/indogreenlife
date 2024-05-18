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

Route::group(['prefix' => 'user'], function() {
    Route::get('/',[App\Http\Controllers\UsersController::class, 'index'])->middleware('auth');
    Route::get('/detail/{id}',[App\Http\Controllers\UsersController::class, 'show'])->middleware('auth');
    Route::get('/new',[App\Http\Controllers\UsersController::class, 'create'])->middleware('auth');
    Route::post('/store',[App\Http\Controllers\UsersController::class, 'store'])->middleware('auth');
    Route::get('/edit/{id}',[App\Http\Controllers\UsersController::class, 'edit'])->middleware('auth');
    Route::post('/update',[App\Http\Controllers\UsersController::class, 'update'])->middleware('auth');
    Route::get('/delete/{id}',[App\Http\Controllers\UsersController::class, 'delete'])->middleware('auth');
});

Route::group(['prefix' => 'roles'], function() {
    Route::get('/',[App\Http\Controllers\RolesController::class, 'index'])->middleware('auth');
    Route::post('/store',[App\Http\Controllers\RolesController::class, 'store'])->middleware('auth');
    Route::get('/edit/{id}',[App\Http\Controllers\RolesController::class, 'edit'])->middleware('auth');
    Route::post('/update',[App\Http\Controllers\RolesController::class, 'update'])->middleware('auth');
    Route::get('/delete/{id}',[App\Http\Controllers\RolesController::class, 'delete'])->middleware('auth');
});
require __DIR__.'/auth.php';
