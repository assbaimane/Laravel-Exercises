<?php

namespace App\Http\Controllers;

use App\Models\Titre;
use Illuminate\Http\Request;

class TitreController extends Controller
{
    public function index(){
        $titres = Titre::all();
        return view("back.pages.titre.index", compact("titres"));
    }

    public function destroy($id)
    {
        $titre = Titre::find($id);
        $titre->delete();
        return redirect()->back()->with('message','Utilisateur supprimé');
    }

    public function edit($id)
    {
        $titre = Titre::find($id);
        return view("back/pages/titre.edit", compact("titre"));
    }

    public function update($id, Request $request)
    {
        $titre = Titre::find($id);
        $titre->titre = $request->titre ?? " ";
        $titre->soustitre = $request->soustitre ?? " ";
        $titre->description = $request->description ?? " ";
        $titre->updated_at = now();

        $titre->save();
        return redirect()->route("titre.index")->with('message','Utilisteur mis à jour');
    }

    public function create()
    {
        return view("back/pages/titre.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre'=> 'required'
        ]);

        $titre = new Titre;
        $titre->titre = $request->titre ?? " ";
        $titre->soustitre = $request->soustitre ?? " ";
        $titre->description = $request->description ?? " ";
        $titre->updated_at = now();
    
        $titre->save();
        // return redirect()->route("titre.index");
        return redirect()->route("titre.index")->with('message','Utilisteur ajouté');
    }
}
