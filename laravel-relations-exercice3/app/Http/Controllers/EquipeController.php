<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    //
    public function index()
    {
        $equipes = Equipe::all();
        $joueuravant = Joueur::where('role_id','1');
        // dd($joueuravant);
        return view("/back/equipes/all",compact("equipes","joueuravant"));
    }
    public function create()
    {
        return view("/back/equipes/create");
    }
    public function store(Request $request)
    {
        $equipe = new Equipe;
        $request->validate([
         'nom'=> 'required',
         'ville'=> 'required',
         'pays'=> 'required',
         'continent'=> 'required',
         'nbavant'=> 'required',
         'nbarriere'=> 'required',
         'nbcentraux'=> 'required',
         'nbremplacant'=> 'required',
        ]); // store_validated_anchor;
        $equipe->nom = $request->nom;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->continent = $request->continent;
        $equipe->nbavant = $request->nbavant;
        $equipe->nbarriere = $request->nbarriere;
        $equipe->nbcentraux = $request->nbcentraux;
        $equipe->nbremplacant = $request->nbremplacant;
        $equipe->save(); // store_anchor
        return redirect()->route("equipe.index")->with('message', "Successful storage !");
    }
    public function show($id)
    {
        $equipe = Equipe::find($id);
        return view("/back/equipes/read",compact("equipe"));
    }
    public function edit($id)
    {
        $equipe = Equipe::find($id);
        return view("/back/equipes/edit",compact("equipe"));
    }
    public function update($id, Request $request)
    {
        $equipe = Equipe::find($id);
        $request->validate([
         'nom'=> 'required',
         'ville'=> 'required',
         'pays'=> 'required',
         'continent'=> 'required',
         'nbavant'=> 'required',
         'nbarriere'=> 'required',
         'nbcentraux'=> 'required',
         'nbremplacant'=> 'required',
        ]); // update_validated_anchor;
        $equipe->nom = $request->nom;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->continent = $request->continent;
        $equipe->nbavant = $request->nbavant;
        $equipe->nbarriere = $request->nbarriere;
        $equipe->nbcentraux = $request->nbcentraux;
        $equipe->nbremplacant = $request->nbremplacant;
        $equipe->save(); // update_anchor
        return redirect()->route("equipe.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $equipe = Equipe::find($id);
        // $equipe->steps->delete();
        // $equipe =Equipe::where('id',$id)->delete();
        
        $equipe->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
