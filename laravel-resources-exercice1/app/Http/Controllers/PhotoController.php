<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(){
        $photos = Photo::all();
        return view("back.pages.photo.index", compact("photos"));
    }

    public function destroy($id)
    {
        $photo = Photo::find($id);
        $photo->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $photo = Photo::find($id);
        return view("back/pages/photo.edit", compact("photo"));
    }

    public function update($id, Request $request)
    {
        $photo = Photo::find($id);
        $photo->nom = $request->nom ?? " ";
        $photo->lien= $request->lien ?? ' ';
        $photo->album = $request->album ?? " ";
        $photo->updated_at = now();

        $photo->save();
        return redirect()->route("photo.index");
    }

    public function create()
    {
        return view("back/pages/photo.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom'=> 'required'
        ]);

        $photo = new Photo;
        $photo->nom = $request->nom ?? " ";
        $photo->lien= $request->lien ?? ' ';
        $photo->album = $request->album ?? " ";
        $photo->updated_at = now();
    
        $photo->save();
        return redirect()->route("photo.index")->with('message','Utilisteur ajouté');
    }
}