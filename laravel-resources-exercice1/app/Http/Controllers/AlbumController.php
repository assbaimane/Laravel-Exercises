<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
        $albums = Album::all();
        return view("back.pages.album", compact("albums"));
    }

    public function destroy($id)
    {
        $album = Album::find($id);
        $album->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $album = Album::find($id);
        return view("back/pages/albumedit", compact("album"));
    }

    public function update($id, Request $request)
    {
        $album = Album::find($id);
        $album->album = $request->album ?? " ";
        // $album->sousalbum= request('sousalbum') ?? ' ';
        $album->sousalbum = $request->sousalbum ?? " ";
        $album->updated_at = now();

        $album->save();
        return redirect()->route("albums.index");
    }
}
