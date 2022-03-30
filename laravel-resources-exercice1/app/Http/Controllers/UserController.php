<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view("back.pages.user.index", compact("users"));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view("back/pages/user.edit", compact("user"));
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);
        $user->nom = $request->nom ?? " ";
        $user->prenom= $request->prenom ?? ' ';
        $user->age = $request->age ?? " ";
        $user->naissance = $request->naissance ?? " ";
        $user->email= $request->email ?? ' ';
        $user->mdp = $request->mdp ?? " ";
        $user->nbalbum = $request->nbalbum ?? " ";
        $user->updated_at = now();

        $user->save();
        return redirect()->route("user.index");
    }

    public function create()
    {
        return view("back/pages/user.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom'=> 'required'
        ]);

        $user = new User;
        $user->nom = $request->nom ?? " ";
        $user->lien= $request->lien ?? ' ';
        $user->album = $request->album ?? " ";
        $user->updated_at = now();
    
        $user->save();
        return redirect()->route("user.index")->with('message','Utilisteur ajouté');
    }
}