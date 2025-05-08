<?php

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
Route::post('/thanks',[contactController::class, 'create']);

Route::post('/admin',[UsersController::class, 'admin']);
Route::get('/register',[UsersController::class, 'register']);
Route::post('/register',[UsersController::class, 'create']);
Route::get('/login',[UsersController::class, 'login']);


Route::get('/admin',[UsersController::class, 'admin']);
Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
+ });