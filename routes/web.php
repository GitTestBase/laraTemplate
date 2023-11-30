<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;


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
Route::middleware(['guest'])->group(function () {
    Route::get('/',[AuthController::class,'login']);
    Route::post('loginpost',[AuthController::class,'loginpost'])->name('loginpost');

});
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',[AuthController::class,'dashboardview']);
    Route::get('/logout',[AuthController::class,'logout']);
});

