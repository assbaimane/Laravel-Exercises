<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
        $albums = Album::all();
        return view("back.pages.album.index", compact("albums"));
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
        return view("back/pages/album.edit", compact("album"));
    }

    public function update($id, Request $request)
    {
        $album = Album::find($id);
        $album->nom = $request->nom ?? " ";
        $album->description= $request->description ?? ' ';
        $album->auteur = $request->auteur ?? " ";
        $album->nombre = $request->nombre ?? " ";
        $album->updated_at = now();

        $album->save();
        return redirect()->route("album.index");
    }

    public function create()
    {
        return view("back/pages/album.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom'=> 'required'
        ]);

        $album = new Album;
        $album->nom = $request->nom ?? " ";
        $album->description= $request->description ?? ' ';
        $album->auteur = $request->auteur ?? " ";
        $album->nombre = $request->nombre ?? " ";
        $album->updated_at = now();
    
        $album->save();
        return redirect()->route("album.index")->with('message','Utilisteur ajouté');
    }
}
