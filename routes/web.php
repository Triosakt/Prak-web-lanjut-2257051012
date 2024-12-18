<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('/user/profile', [UserController::class, 'profile']);

Route::get('/user/create', [UserController::class, 'create']);

Route::post('/user/store', [UserController::class, 'store']);

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/user/{id}', [UserController::class, 'show'])->name('users.show');

Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');

Route::put('/user/{id}', [UserController::class, 'update'])->name('users.update');

Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/', [UserController::class, 'index'])->name('user.list');
 update-delete
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');

Route::get('/user/create', [UserController::class, 'create'])->name('users.create'); master
