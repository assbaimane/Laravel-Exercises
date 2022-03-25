<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function index(){
        $equipes = Equipe::all();
        return view("back.pages.equipe.index", compact("equipes"));
    }

    public function destroy($id)
    {
        $equipe = Equipe::find($id);
        $equipe->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $equipe = Equipe::find($id);
        return view("back/pages/equipe.edit", compact("equipe"));
    }

    public function update($id, Request $request)
    {
        $equipe = Equipe::find($id);
        $equipe->name = $request->name ?? " ";
        $equipe->number = $request->number ?? " ";
        $equipe->trainer = $request->trainer ?? " ";
        $equipe->position = $request->position ?? " ";
        $equipe->updated_at = now();

        $equipe->save();
        return redirect()->route("equipe.index");
    }

    public function create()
    {
        return view("back.pages.equipe.create");
    }

    public function store(Request $request)
    {
        $equipe = new Equipe;
        $equipe->name = $request->name ?? " ";
        $equipe->number = $request->number ?? " ";
        $equipe->trainer = $request->trainer ?? " ";
        $equipe->position = $request->position ?? " ";
        $equipe->updated_at = now();

        $equipe->save();
        return redirect()->route("equipe.index");
    }
}
