<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function index(){
        $voitures = Voiture::all();
        return view("back.pages.voiture.index", compact("voitures"));
    }

    public function destroy($id)
    {
        $voiture = Voiture::find($id);
        $voiture->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $voiture = Voiture::find($id);
        return view("back/pages/voiture.edit", compact("voiture"));
    }

    public function update($id, Request $request)
    {
        $voiture = Voiture::find($id);
        $voiture->brand = $request->brand ?? " ";
        $voiture->year = $request->year ?? " ";
        $voiture->color = $request->color ?? " ";
        $voiture->price = $request->price ?? " ";
        $voiture->discount = $request->discount ?? " ";
        $voiture->updated_at = now();

        $voiture->save();
        return redirect()->route("voiture.index");
    }

    public function create()
    {
        return view("back/pages/voiture.create");
    }

    public function store(Request $request)
    {
        $voiture = new Voiture;
        $voiture->brand = $request->brand ?? " ";
        $voiture->year = $request->year ?? " ";
        $voiture->color = $request->color ?? " ";
        $voiture->price = $request->price ?? " ";
        $voiture->discount = $request->discount ?? " ";
        $voiture->updated_at = now();

        $voiture->save();
        return redirect()->route("voiture.index");
    }
}
