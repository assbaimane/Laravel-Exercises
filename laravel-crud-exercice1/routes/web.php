<?php

use App\Models\Article;
use App\Models\Equipe;
use App\Models\User;
use App\Models\Voiture;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\ArticleController;
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

Route::get('/', function () {
    $users = User::all();
    $equipes = Equipe::all();
    $articles = Article::all();
    $voitures = Voiture::all();
    return view('welcome', compact('users','equipes','articles','voitures'));
});
Route::get('/welcomeback', function () {
    return view('back/pages/welcomeback');
});


//-------------------------- USER --------------------------
Route::get('/user', function () {
    $users = User::all();
    return view('back/pages/user/index', compact('users'));
});
Route::get("back/pages/user/index", [UserController::class, "index"])->name("user.index");
Route::post("back/user/{id}/delete", [UserController::class, "destroy"])->name("user.destroy");
Route::get("back/user/{id}/edit", [UserController::class, "edit"])->name("user.edit");
Route::post("back/user/{id}/update", [UserController::class, "update"])->name("user.update");
Route::get("back/user/create", [UserController::class, "create"])->name("user.create");
Route::post("back/user/store", [UserController::class, "store"])->name("user.store");


//-------------------------- EQUIPE --------------------------
Route::get('/equipes', function () {
    $equipes = Equipe::all();
    return view('back/pages/equipe/index', compact('equipes'));
});
Route::get("back/pages/equipes/index", [EquipeController::class, "index"])->name("equipe.index");
Route::post("back/equipe/{id}/delete", [EquipeController::class, "destroy"])->name("equipe.destroy");
Route::get("back/equipe/{id}/edit", [EquipeController::class, "edit"])->name("equipe.edit");
Route::post("back/equipe/{id}/update", [EquipeController::class, "update"])->name("equipe.update");
Route::get("back/equipe/create", [EquipeController::class, "create"])->name("equipe.create");
Route::post("back/equipe/store", [EquipeController::class, "store"])->name("equipe.store");


//-------------------------- VOITURE --------------------------
Route::get('/voiture', function () {
    $voitures = Voiture::all();
    return view('back/pages/voiture/index', compact('voitures'));
});
Route::get("back/pages/voiture/index", [VoitureController::class, "index"])->name("voiture.index");
Route::post("back/voiture/{id}/delete", [VoitureController::class, "destroy"])->name("voiture.destroy");
Route::get("back/voiture/{id}/edit", [VoitureController::class, "edit"])->name("voiture.edit");
Route::post("back/voiture/{id}/update", [VoitureController::class, "update"])->name("voiture.update");
Route::get("back/voiture/create", [VoitureController::class, "create"])->name("voiture.create");
Route::post("back/voiture/store", [VoitureController::class, "store"])->name("voiture.store");


//-------------------------- ARTICLE --------------------------
Route::get('/article', function () {
    $articles = Article::all();
    return view('back/pages/article/index', compact('articles'));
});
Route::get("back/pages/article/index", [ArticleController::class, "index"])->name("article.index");
Route::post("back/article/{id}/delete", [ArticleController::class, "destroy"])->name("article.destroy");
Route::get("back/article/{id}/edit", [ArticleController::class, "edit"])->name("article.edit");
Route::post("back/article/{id}/update", [ArticleController::class, "update"])->name("article.update");
Route::get("back/article/create", [ArticleController::class, "create"])->name("article.create");
Route::post("back/article/store", [ArticleController::class, "store"])->name("article.store");