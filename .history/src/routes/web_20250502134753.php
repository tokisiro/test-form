<?php

use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UsersController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

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

Route::get('/',[ContactController::class, 'index']);
Route::post('/confirm',[ContactController::class, 'confirm']);
Route::post('/create',[ContactController::class, 'create']);


Route::get('/register',[UsersController::class, 'register'])->name('register');
Route::post('/register',[UsersController::class, 'create']);

Route::get('/login',[UsersController::class, 'login'])->name('login');
Route::post('/login',[AuthenticatedSessionController::class, 'store']);

Route::middleware('auth')->get('/admin', function () {
    return view('admin');
});
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
