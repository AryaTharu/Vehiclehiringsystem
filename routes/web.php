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

Route::get('/',[\App\Http\Controllers\CustomAuthController::class,'index']);
Route::get('/login',[\App\Http\Controllers\CustomAuthController::class,'login']);
//    ->middleware('alreadyLoggedIn');
Route::get('/registration',[\App\Http\Controllers\CustomAuthController::class,'registration']);
//    ->middleware('alreadyLoggedIn');
Route::post('/register-user',[\App\Http\Controllers\CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[\App\Http\Controllers\CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[\App\Http\Controllers\CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout',[\App\Http\Controllers\CustomAuthController::class,'logout']);
//Route::get('/list',[\App\Http\Controllers\CustomAuthController::class,'listAll'])->name('listAll');
Route::get('/rent',[\App\Http\Controllers\CustomAuthController::class,'rent'])->name('rent');
Route::get('/list',[\App\Http\Controllers\CustomAuthController::class,'list']);
Route::post('/rent-request',[\App\Http\Controllers\CustomAuthController::class,'rentRequest'])->name('rent-request');
Route::get('/driver',[\App\Http\Controllers\CustomAuthController::class,'driver']);
Route::get('/driver-rent',[\App\Http\Controllers\CustomAuthController::class,'driverRent'])->name('driver-rent');
Route::post('/driver-request',[\App\Http\Controllers\CustomAuthController::class,'driverRequest'])->name('driver-request');
Route::get('/driver-rent-one',[\App\Http\Controllers\CustomAuthController::class,'driverRentOne'])->name('driver-rent-one');
Route::post('/driver-request-one',[\App\Http\Controllers\CustomAuthController::class,'driverRequestOne'])->name('driver-request-one');
Route::get('/driver-rent-two',[\App\Http\Controllers\CustomAuthController::class,'driverRentTwo'])->name('driver-rent-two');
Route::post('/driver-request-two',[\App\Http\Controllers\CustomAuthController::class,'driverRequestTwo'])->name('driver-request-two');
