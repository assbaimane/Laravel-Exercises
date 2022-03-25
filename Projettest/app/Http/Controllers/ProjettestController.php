<?php

namespace App\Http\Controllers;

use App\Models\Projettest;
use Illuminate\Http\Request;

class ProjettestController extends Controller
{
    //
    public function index()
    {
        $projettests = Projettest::all();
        return view("/back/projettests/all",compact("projettests"));
    }
    public function create()
    {
        return view("/back/projettests/create");
    }
    public function store(Request $request)
    {
        $projettest = new Projettest;
        $request->validate([
         'user'=> 'required',
         'coucou'=> 'required',
        ]); // store_validated_anchor;
        $projettest->user = $request->user;
        $projettest->coucou = $request->coucou;
        $projettest->save(); // store_anchor
        return redirect()->route("projettest.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $projettest = Projettest::find($id);
        return view("/back/projettests/read",compact("projettest"));
    }
    public function edit($id)
    {
        $projettest = Projettest::find($id);
        return view("/back/projettests/edit",compact("projettest"));
    }
    public function update($id, Request $request)
    {
        $projettest = Projettest::find($id);
        $request->validate([
         'user'=> 'required',
         'coucou'=> 'required',
        ]); // update_validated_anchor;
        $projettest->user = $request->user;
        $projettest->coucou = $request->coucou;
        $projettest->save(); // update_anchor
        return redirect()->route("projettest.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $projettest = Projettest::find($id);
        $projettest->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
