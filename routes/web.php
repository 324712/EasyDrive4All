<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\LessonsController;
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

Route::get('/', [AppController::class, 'index'])->name('index');
Route::get('login', [AppController::class, 'login'])->name('login');
Route::match(array('get', 'post'), 'register', [AppController::class, 'register'])->name('register');
Route::get('lessons', [LessonsController::class, 'index'])->name('lessons');
