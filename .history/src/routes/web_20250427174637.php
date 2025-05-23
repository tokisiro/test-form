<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UsersController;

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

Route::get('/',[ContactController::class, "index"]);
Route::get('/register',[ContactController::class, 'regist']);
Route::post('/confirm',[UsersController::class, 'confirm']);

Route::get('/admin',[UsersController::class, "index"]);
