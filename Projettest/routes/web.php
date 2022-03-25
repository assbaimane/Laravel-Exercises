<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjettestController;

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
// Projettest
Route::get('/back/projettests', [ProjettestController::class, 'index'])->name('projettest.index');
Route::get('/back/projettests/create', [ProjettestController::class, 'create'])->name('projettest.create');
Route::post('/back/projettests/store', [ProjettestController::class, 'store'])->name('projettest.store');
Route::get('/back/projettests/{id}/read', [ProjettestController::class, 'read'])->name('projettest.read');
Route::get('/back/projettests/{id}/edit', [ProjettestController::class, 'edit'])->name('projettest.edit');
Route::post('/back/projettests/{id}/update', [ProjettestController::class, 'update'])->name('projettest.update');
Route::post('/back/projettests/{id}/delete', [ProjettestController::class, 'destroy'])->name('projettest.destroy');
