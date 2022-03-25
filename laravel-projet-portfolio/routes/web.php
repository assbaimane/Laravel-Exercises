<?php

use App\Models\Testimonial;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Footer;
use App\Models\Home;
use App\Models\Nav;
use App\Models\Portfolio;
use App\Models\Titre;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\FooterController;
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
    $testimonials = Testimonial::all();
    $portfolios = Portfolio::all();
    $contacts = Contact::all();
    $footers = Footer::all();
    return view('welcome', compact('titres','navs','homes','features','testimonials','portfolios','contacts','footers'));
});
Route::get('/welcomeback', function () {
    return view('back/pages/welcomeback');
});


//-------------------------- TITRE --------------------------
Route::get('/titre', function () {
    $titres = Titre::all();
    return view('back/pages/titre/index', compact('titres'));
}); 
Route::get("back/pages/titre/index", [TitreController::class, "index"])->name("titre.index");
Route::post("back/titre/{id}/delete", [TitreController::class, "destroy"])->name("titre.destroy");
Route::get("back/titre/{id}/edit", [TitreController::class, "edit"])->name("titre.edit");
Route::post("back/titre/{id}/update", [TitreController::class, "update"])->name("titre.update");
Route::get("back/titre/create", [TitreController::class, "create"])->name("titre.create");
Route::post("back/titre/store", [TitreController::class, "store"])->name("titre.store");


//-------------------------- NAV --------------------------
Route::get('/nav', function () {
    $navs = Nav::all();
    return view('back/pages/nav/index', compact('navs'));
});
Route::get("back/pages/nav/index", [NavController::class, "index"])->name("nav.index");
Route::post("back/nav/{id}/delete", [NavController::class, "destroy"])->name("nav.destroy");
Route::get("back/nav/{id}/edit", [NavController::class, "edit"])->name("nav.edit");
Route::post("back/nav/{id}/update", [NavController::class, "update"])->name("nav.update");
Route::get("back/nav/create", [NavController::class, "create"])->name("nav.create");
Route::post("back/nav/store", [NavController::class, "store"])->name("nav.store");


//-------------------------- HOME --------------------------
Route::get('/home', function () {
    $homes = Home::all();
    return view('back/pages/home/index', compact('homes'));
});
Route::get("back/pages/home/index", [HomeController::class, "index"])->name("home.index");
Route::post("back/home/{id}/delete", [HomeController::class, "destroy"])->name("home.destroy");
Route::get("back/home/{id}/edit", [HomeController::class, "edit"])->name("home.edit");
Route::post("back/home/{id}/update", [HomeController::class, "update"])->name("home.update");
Route::get("back/home/create", [HomeController::class, "create"])->name("home.create");
Route::post("back/home/store", [HomeController::class, "store"])->name("home.store");


//-------------------------- FEATURE --------------------------
Route::get('/features', function () {
    $features = Feature::all();
    return view('back/pages/feature/index', compact('features'));
});
Route::get("back/pages/features/index", [FeatureController::class, "index"])->name("feature.index");
Route::post("back/feature/{id}/delete", [FeatureController::class, "destroy"])->name("feature.destroy");
Route::get("back/feature/{id}/edit", [FeatureController::class, "edit"])->name("feature.edit");
Route::post("back/feature/{id}/update", [FeatureController::class, "update"])->name("feature.update");
Route::get("back/feature/create", [FeatureController::class, "create"])->name("feature.create");
Route::post("back/feature/store", [FeatureController::class, "store"])->name("feature.store");


//-------------------------- PORTFOLIO --------------------------
Route::get('/portfolio', function () {
    $portfolios = Portfolio::all();
    return view('back/pages/portfolio/index', compact('portfolios'));
});
Route::get("back/pages/portfolio/index", [PortfolioController::class, "index"])->name("portfolio.index");
Route::post("back/portfolio/{id}/delete", [PortfolioController::class, "destroy"])->name("portfolio.destroy");
Route::get("back/portfolio/{id}/edit", [PortfolioController::class, "edit"])->name("portfolio.edit");
Route::post("back/portfolio/{id}/update", [PortfolioController::class, "update"])->name("portfolio.update");
Route::get("back/portfolio/create", [PortfolioController::class, "create"])->name("portfolio.create");
Route::post("back/portfolio/store", [PortfolioController::class, "store"])->name("portfolio.store");


//-------------------------- TESTIMONIAL --------------------------
Route::get('/testimonial', function () {
    $testimonials = Testimonial::all();
    return view('back/pages/testimonial/index', compact('testimonials'));
});
Route::get("back/pages/testimonial/index", [TestimonialController::class, "index"])->name("testimonial.index");
Route::post("back/testimonial/{id}/delete", [TestimonialController::class, "destroy"])->name("testimonial.destroy");
Route::get("back/testimonial/{id}/edit", [TestimonialController::class, "edit"])->name("testimonial.edit");
Route::post("back/testimonial/{id}/update", [TestimonialController::class, "update"])->name("testimonial.update");
Route::get("back/testimonial/create", [TestimonialController::class, "create"])->name("testimonial.create");
Route::post("back/testimonial/store", [TestimonialController::class, "store"])->name("testimonial.store");



//-------------------------- FOOTER --------------------------
Route::get('/footer', function () {
    $footers = Footer::all();
    return view('back/pages/footer/index', compact('footers'));
});
Route::get("/back/pages/footer/index", [FooterController::class, "index"])->name("footer.index");
Route::post("/back/footer/{id}/delete", [FooterController::class, "destroy"])->name("footer.destroy");
Route::get("/back/footer/{id}/edit", [FooterController::class, "edit"])->name("footer.edit");
Route::post("/back/footer/{id}/update", [FooterController::class, "update"])->name("footer.update");
Route::get("/back/footer/create", [FooterController::class, "create"])->name("footer.create");
Route::post("/back/footer/store", [FooterController::class, "store"])->name("footer.store");

