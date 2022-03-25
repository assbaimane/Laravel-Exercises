<?php

namespace App\Http\Controllers;

use App\Models\Nav;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function index(){
        $navs = Nav::all();
        return view("back.pages.nav.index", compact("navs"));
    }

    public function destroy($id)
    {
        $nav = Nav::find($id);
        $nav->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $nav = Nav::find($id);
        return view("back/pages/nav.edit", compact("nav"));
    }

    public function update($id, Request $request)
    {
        $nav = Nav::find($id);
        $nav->logo = $request->logo ?? " ";
        $nav->tabs = $request->tabs ?? " ";
        $nav->button = $request->button ?? " ";
        $nav->updated_at = now();

        $nav->save();
        return redirect()->route("nav.index");
    }

    public function create()
    {
        return view("back/pages/nav.create");
    }

    public function store(Request $request)
    {
        $nav = new Nav;
        $nav->logo = $request->logo ?? " ";
        $nav->tabs = $request->tabs ?? " ";
        $nav->button = $request->button ?? " ";
        $nav->updated_at = now();

        $nav->save();
        return redirect()->route("nav.index");
    }
}
