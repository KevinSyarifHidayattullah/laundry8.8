<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\UserrController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketCucianController;

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

Route::resource('home',HomeController::class)->middleware('auth');
Route::resource('outlet',OutletController::class)->middleware('auth');
Route::resource('member',MemberController::class)->middleware('auth');
Route::resource('paket',PaketController::class)->middleware('auth');
Route::resource('userr',UserrController::class)->middleware('auth');

Route::resource('paket_cucian', PaketCucianController::class);

 
Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
 
 
    Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');