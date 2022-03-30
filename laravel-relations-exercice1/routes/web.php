<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
use App\Http\Controllers\rolesController;

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
// roles
Route::get('/back/roles', [rolesController::class, 'index'])->name('roles.index');
Route::get('/back/roles/create', [rolesController::class, 'create'])->name('roles.create');
Route::post('/back/roles/store', [rolesController::class, 'store'])->name('roles.store');
Route::get('/back/roles/{id}/read', [rolesController::class, 'read'])->name('roles.read');
Route::get('/back/roles/{id}/edit', [rolesController::class, 'edit'])->name('roles.edit');
Route::post('/back/roles/{id}/update', [rolesController::class, 'update'])->name('roles.update');
Route::post('/back/roles/{id}/delete', [rolesController::class, 'destroy'])->name('roles.destroy');
// users
Route::get('/back/users', [usersController::class, 'index'])->name('users.index');
Route::get('/back/users/create', [usersController::class, 'create'])->name('users.create');
Route::post('/back/users/store', [usersController::class, 'store'])->name('users.store');
Route::get('/back/users/{id}/read', [usersController::class, 'read'])->name('users.read');
Route::get('/back/users/{id}/edit', [usersController::class, 'edit'])->name('users.edit');
Route::post('/back/users/{id}/update', [usersController::class, 'update'])->name('users.update');
Route::post('/back/users/{id}/delete', [usersController::class, 'destroy'])->name('users.destroy');
