<?php

namespace App\Http\Controllers;

use App\Models\roles;
use Illuminate\Http\Request;

class rolesController extends Controller
{
    //
    public function index()
    {
        $roles = roles::all();
        return view("/back/roles/all",compact("roles"));
    }
    public function create()
    {
        return view("/back/roles/create");
    }
    public function store(Request $request)
    {
        $role = new roles;
        $request->validate([
         'nom'=> 'required',
        ]); // store_validated_anchor;
        $role->nom = $request->nom;
        $role->save(); // store_anchor
        return redirect()->route("roles.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $role = roles::find($id);
        return view("/back/roles/read",compact("roles"));
    }
    public function edit($id)
    {
        $role = roles::find($id);
        return view("/back/roles/edit",compact("roles"));
    }
    public function update($id, Request $request)
    {
        $role = roles::find($id);
        $request->validate([
         'nom'=> 'required',
        ]); // update_validated_anchor;
        $role->nom = $request->nom;
        $role->save(); // update_anchor
        return redirect()->route("roles.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $role = roles::find($id);
        $role->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
