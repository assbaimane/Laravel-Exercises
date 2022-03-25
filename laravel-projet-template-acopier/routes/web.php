<?php

use App\Models\About;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Footer;
use App\Models\Home;
use App\Models\Nav;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Titre;
use App\Http\Controllers\TitreController;
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
    $titres = Titre::all();
    $navs = Nav::all();
    $homes = Home::all();
    $features = Feature::all();
    $abouts = About::all();
    $services = Service::all();
    $portfolios = Portfolio::all();
    $contacts = Contact::all();
    $footers = Footer::all();
    return view('welcome', compact('titres','navs','homes','features','abouts','services','portfolios','contacts','footers'));
});
Route::get('/welcomeback', function () {
    return view('back/pages/welcomeback');
});


//-------------------------- TITRE --------------------------
Route::get('/titre', function () {
    $titres = Titre::all();
    return view('back/pages/titre', compact('titres'));
});
Route::get("back/pages/titre", [TitreController::class, "index"])->name("titres.index");
Route::post("back/titre/{id}/delete", [TitreController::class, "destroy"])->name("titre.destroy");
Route::get("back/titre/{id}/edit", [TitreController::class, "edit"])->name("titre.edit");
Route::post("back/titre/{id}/update", [TitreController::class, "update"])->name("titre.update");

//-------------------------- NAV --------------------------
Route::get('/nav', function () {
    $navs = Nav::all();
    return view('back/pages/nav', compact('navs'));
});


//-------------------------- HOME --------------------------
Route::get('/home', function () {
    $homes = Home::all();
    return view('back/pages/home', compact('homes'));
});


//-------------------------- FEATURE --------------------------
Route::get('/features', function () {
    $features = Feature::all();
    return view('back/pages/features', compact('features'));
});


//-------------------------- ABOUTUS --------------------------
Route::get('/aboutus', function () {
    $abouts = About::all();
    return view('back/pages/aboutus', compact('abouts'));
});


//-------------------------- SERVICES --------------------------
Route::get('/services', function () {
    $services = Service::all();
    return view('back/pages/services', compact('services'));
});


//-------------------------- PORTFOLIO --------------------------
Route::get('/portfolio', function () {
    $portfolios = Portfolio::all();
    return view('back/pages/portfolio', compact('portfolios'));
});


//-------------------------- FOOTER --------------------------
Route::get('/footer', function () {
    $footers = Footer::all();
    return view('back/pages/footer', compact('footers'));
});
