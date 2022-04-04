<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Photo;
use App\Models\Role;
use Illuminate\Http\Request;

class JoueurController extends Controller
{
    //
    public function index()
    {
        $joueurs = Joueur::all();
        return view("/back/joueurs/all",compact("joueurs"));
    }
    public function create()
    {
        $equipes = Equipe::all();
        $roles = Role::all();
        return view("/back/joueurs/create", compact('equipes','roles'));
    }
    public function store(Request $request)
    {
        $joueur = new Joueur;
        // $photo = new Photo; inutile car photocontroller
        $request->validate([
         'nom'=> 'required',
         'prenom'=> 'required',
         'age'=> 'required',
         'telephone'=> 'required',
         'email'=> 'required',
         'genre'=> 'required',
         'origine'=> 'required',
         'role_id'=> 'required',
         'equipe_id'=> 'required'
        ]); // store_validated_anchor;
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->telephone = $request->telephone;
        $joueur->email = $request->email;
        $joueur->genre = $request->genre;
        $joueur->origine = $request->origine;
        $joueur->role_id = $request->role_id;
        $joueur->equipe_id = $request->equipe_id;
        $joueur->save(); // store_anchor
        $photo = new Photo();
        $photo->photo = $request->file('photo')->hashName();
        $photo->joueur_id = $joueur->id;
        $photo->save();
        $request -> file('photo')->storePublicly('img','public'); //c'est pour enregistrer l'image dans laravel
        return redirect()->route("joueur.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $joueur = Joueur::find($id);
        return view("/back/joueurs/read",compact("joueur"));
    }
    public function edit($id)
    {
        $joueur = Joueur::find($id);
        return view("/back/joueurs/edit",compact("joueur"));
    }
    public function update($id, Request $request)
    {
        $joueur = Joueur::find($id);
        $request->validate([
         'nom'=> 'required',
         'prenom'=> 'required',
         'age'=> 'required',
         'telephone'=> 'required',
         'email'=> 'required',
         'genre'=> 'required',
         'origine'=> 'required',
         'role'=> 'required',
         'photo'=> 'required',
        ]); // update_validated_anchor;
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->telephone = $request->telephone;
        $joueur->email = $request->email;
        $joueur->genre = $request->genre;
        $joueur->origine = $request->origine;
        $joueur->role_id = $request->role;
        $joueur->equipe_id = $request->equipe;
        $joueur->photo = $request->photo;
        $joueur->save(); // update_anchor
        return redirect()->route("joueur.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $joueur = Joueur::find($id);
        $joueur->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
