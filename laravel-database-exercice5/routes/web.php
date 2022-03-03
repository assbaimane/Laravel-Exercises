<?php

use App\Models\Article;
use App\Models\Equipe;
use App\Models\Portfolio;
use App\Models\User;
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
    // Affichez tous les utilisateurs
    // $user = User::all();

    // Affichez le premier utilisateur
    // $user = User::all()->first();

    // - Affichez le dernier utilisateur
    // $user = User::all()->last();

    // - Affichez les utilisateurs grâce à leur nom
    // $user = User::where('prenom','Brain Sipes')->first();
    // dd($user->id);

    // - Affichez l'utilisateur qui a l'id 5
    // $user = User::find(5);

    // - Affichez le nombre d'utilisateurs qu'il y a dans la table
    // $user = User::all();
    // dd((sizeof($user)));

    // - Affichez deux utilisateurs qui font partie du même pays
    // $user = User::where('pays','Seychelles')->get(2);
    // Ne fonctionne plus celui la

    // - Affichez le premier utilisateur qui habite dans un pays spécifique
    // $user = User::where('pays','Gabon')->first();

    // dd($user->id);
    return view('welcome');
});

Route::get('/user', function () {
    $users = User::all();
    return view('/pages/user', compact("users"));
});

Route::get('/article', function () {
    $articles = Article::all();
    return view('/pages/article', compact("articles"));
});

Route::get('/portfolio', function () {
    $portfolios = Portfolio::all();
    return view('/pages/portfolio', compact("portfolios"));
});

Route::get('/equipe', function () {
    $equipes = Equipe::all();
    return view('/pages/equipe', compact("equipes"));
});