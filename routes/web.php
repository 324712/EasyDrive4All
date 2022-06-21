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
Route::get('register', [AppController::class, 'register'])->name('register');

Route::prefix('lessons')->name('lessons.')->group(function () {
    Route::get('/', [LessonsController::class, 'index'])->name('index');
    Route::get('archive', [LessonsController::class, 'archive'])->name('archive');
    Route::match(array('get', 'post'), 'create', [LessonsController::class, 'create'])->name('create');
    Route::match(array('get', 'post'), 'edit/{id}', [LessonsController::class, 'edit'])->name('edit');
    Route::match(array('get', 'post'), 'delete/{id}', [LessonsController::class, 'delete'])->name('delete');
    Route::match(array('get', 'post'), 'publish/{id}', [LessonsController::class, 'publish'])->name('publish');
});
