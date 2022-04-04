<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Photo;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
         'role_id'=> 'required'
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
    public function show($id)
    {
        $joueur = Joueur::find($id);
        $roles = Role::all();
        $equipes = Equipe::all();
        return view("/back/joueurs/read",compact("joueur",'roles','equipes'));
    }
    public function edit($id)
    {
        $joueur = Joueur::find($id);
        $roles = Role::all();
        $equipes = Equipe::all();
        return view("/back/joueurs/edit",compact("joueur",'roles','equipes'));
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
         'role_id'=> 'required'
        ]); // update_validated_anchor;
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->telephone = $request->telephone;
        $joueur->email = $request->email;
        $joueur->genre = $request->genre;
        $joueur->origine = $request->origine;
        $joueur->role_id = $request->role_id;
        $joueur->equipe_id = $request->equipe_id;

        $photo = Photo::find($joueur->photos->id);
        if($request->file('photo')){
            echo"On reçoit une nouvelle image";
            Storage::disk('public')->delete('img/' . $joueur->photos->photo);
            $photo->photo = $request->file('photo')->hashName();
            $photo->joueur_id = $joueur->id;
            $photo->save();
            $request -> file('photo')->storePublicly('img','public');
        }
        else{
            echo"rienreçu";
        }

        $joueur->save(); // update_anchor
        return redirect()->route("joueur.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $joueur = Joueur::find($id);
        Storage::disk('public')->delete('img/' . $joueur->photos->photo);
        $joueur->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
