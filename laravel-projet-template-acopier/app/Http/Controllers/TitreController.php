<?php

namespace App\Http\Controllers;

use App\Models\Titre;
use Illuminate\Http\Request;

class TitreController extends Controller
{
    public function index(){
        $titres = Titre::all();
        return view("back.pages.titre", compact("titres"));
    }

    public function destroy($id)
    {
        $titre = Titre::find($id);
        $titre->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $titre = Titre::find($id);
        return view("back/pages/titreedit", compact("titre"));
    }

    public function update($id, Request $request)
    {
        $titre = Titre::find($id);
        $titre->titre = $request->titre ?? " ";
        // $titre->soustitre= request('soustitre') ?? ' ';
        $titre->soustitre = $request->soustitre ?? " ";
        $titre->updated_at = now();

        $titre->save();
        return redirect()->route("titres.index");
    }
}
