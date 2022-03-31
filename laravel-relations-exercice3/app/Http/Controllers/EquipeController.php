<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    //
    public function index()
    {
        $equipes = Equipe::all();
        return view("/back/equipes/all",compact("equipes"));
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
         'nbmaxavant'=> 'required',
         'nbmaxarriere'=> 'required',
         'nbmaxcentraux'=> 'required',
         'nbmaxremplacant'=> 'required',
        ]); // store_validated_anchor;
        $equipe->nom = $request->nom;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->continent = $request->continent;
        $equipe->nbmaxavant = $request->nbmaxavant;
        $equipe->nbmaxarriere = $request->nbmaxarriere;
        $equipe->nbmaxcentraux = $request->nbmaxcentraux;
        $equipe->nbmaxremplacant = $request->nbmaxremplacant;
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
         'nbmaxavant'=> 'required',
         'nbmaxarriere'=> 'required',
         'nbmaxcentraux'=> 'required',
         'nbmaxremplacant'=> 'required',
        ]); // update_validated_anchor;
        $equipe->nom = $request->nom;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->continent = $request->continent;
        $equipe->nbmaxavant = $request->nbmaxavant;
        $equipe->nbmaxarriere = $request->nbmaxarriere;
        $equipe->nbmaxcentraux = $request->nbmaxcentraux;
        $equipe->nbmaxremplacant = $request->nbmaxremplacant;
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
