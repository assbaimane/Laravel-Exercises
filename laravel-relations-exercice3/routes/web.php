<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\joueurController;
use App\Http\Controllers\equipeController;

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
//  Equipe
Route::get('/back/equipes', [equipeController::class, 'index'])->name('equipe.index');
Route::get('/back/equipes/create', [equipeController::class, 'create'])->name('equipe.create');
Route::post('/back/equipes/store', [equipeController::class, 'store'])->name('equipe.store');
Route::get('/back/equipes/{id}/read', [equipeController::class, 'read'])->name('equipe.read');
Route::get('/back/equipes/{id}/edit', [equipeController::class, 'edit'])->name('equipe.edit');
Route::post('/back/equipes/{id}/update', [equipeController::class, 'update'])->name('equipe.update');
Route::post('/back/equipes/{id}/delete', [equipeController::class, 'destroy'])->name('equipe.destroy');
// Joueur
Route::get('/back/joueurs', [joueurController::class, 'index'])->name('joueur.index');
Route::get('/back/joueurs/create', [joueurController::class, 'create'])->name('joueur.create');
Route::post('/back/joueurs/store', [joueurController::class, 'store'])->name('joueur.store');
Route::get('/back/joueurs/{id}/read', [joueurController::class, 'read'])->name('joueur.read');
Route::get('/back/joueurs/{id}/edit', [joueurController::class, 'edit'])->name('joueur.edit');
Route::post('/back/joueurs/{id}/update', [joueurController::class, 'update'])->name('joueur.update');
Route::post('/back/joueurs/{id}/delete', [joueurController::class, 'destroy'])->name('joueur.destroy');
// Role
Route::get('/back/roles', [RoleController::class, 'index'])->name('role.index');
Route::get('/back/roles/create', [RoleController::class, 'create'])->name('role.create');
Route::post('/back/roles/store', [RoleController::class, 'store'])->name('role.store');
Route::get('/back/roles/{id}/read', [RoleController::class, 'read'])->name('role.read');
Route::get('/back/roles/{id}/edit', [RoleController::class, 'edit'])->name('role.edit');
Route::post('/back/roles/{id}/update', [RoleController::class, 'update'])->name('role.update');
Route::post('/back/roles/{id}/delete', [RoleController::class, 'destroy'])->name('role.destroy');
// Photo
Route::get('/back/photos', [PhotoController::class, 'index'])->name('photo.index');
Route::get('/back/photos/create', [PhotoController::class, 'create'])->name('photo.create');
Route::post('/back/photos/store', [PhotoController::class, 'store'])->name('photo.store');
Route::get('/back/photos/{id}/read', [PhotoController::class, 'read'])->name('photo.read');
Route::get('/back/photos/{id}/edit', [PhotoController::class, 'edit'])->name('photo.edit');
Route::post('/back/photos/{id}/update', [PhotoController::class, 'update'])->name('photo.update');
Route::post('/back/photos/{id}/delete', [PhotoController::class, 'destroy'])->name('photo.destroy');
