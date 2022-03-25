<?php

use App\Models\Photo;
use App\Models\User;
use App\Models\Album;
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
    $albums = Album::all();
    $photos = Photo::all();
    $users = User::all();
    return view('welcome', compact('albums','photos','users'));
});


//-------------------------- ALBUM --------------------------
Route::get('/album', function () {
    $albums = Album::all();
    return view('back/pages/album', compact('albums'));
});
Route::get("back/pages/album", [AlbumController::class, "index"])->name("albums.index");
Route::post("back/album/{id}/delete", [AlbumController::class, "destroy"])->name("album.destroy");
Route::get("back/album/{id}/edit", [AlbumController::class, "edit"])->name("album.edit");
Route::post("back/album/{id}/update", [AlbumController::class, "update"])->name("album.update");

//-------------------------- PHOTO --------------------------
Route::get('/photo', function () {
    $photos = Photo::all();
    return view('back/pages/photo', compact('photos'));
});

//-------------------------- USER --------------------------
Route::get('/user', function () {
    $users = User::all();
    return view('back/pages/user', compact('users'));
});