<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\users;
use Illuminate\Http\Request;

class usersController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view("/back/users/all",compact("users"));
    }
    public function create()
    {
        return view("/back/users/create");
    }
    public function store(Request $request)
    {
        $user = new User;
        $request->validate([
         'nom'=> 'required',
         'prenom'=> 'required',
         'age'=> 'required',
         'email'=> 'required',
         'mdp'=> 'required',
         'datenaissance'=> 'required',
         'genre'=> 'required',
        ]); // store_validated_anchor;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->mdp = $request->mdp;
        $user->datenaissance = $request->datenaissance;
        $user->genre = $request->genre;
        $user->save(); // store_anchor
        return redirect()->route("users.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $user = User::find($id);
        return view("/back/users/read",compact("users"));
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view("/back/users/edit",compact("users"));
    }
    public function update($id, Request $request)
    {
        $user = User::find($id);
        $request->validate([
         'nom'=> 'required',
         'prenom'=> 'required',
         'age'=> 'required',
         'email'=> 'required',
         'mdp'=> 'required',
         'datenaissance'=> 'required',
         'genre'=> 'required',
        ]); // update_validated_anchor;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->mdp = $request->mdp;
        $user->datenaissance = $request->datenaissance;
        $user->genre = $request->genre;
        $user->save(); // update_anchor
        return redirect()->route("users.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
