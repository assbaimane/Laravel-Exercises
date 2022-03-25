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
        $user->name = $request->name ?? " ";
        $user->firstname = $request->firstname ?? " ";
        $user->email = $request->email ?? " ";
        $user->password = $request->password ?? " ";
        $user->profilepicture = $request->profilepicture ?? " ";
        $user->role = $request->role ?? " ";
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
        $user = new User;
        $user->name = $request->name ?? " ";
        $user->firstname = $request->firstname ?? " ";
        $user->email = $request->email ?? " ";
        $user->password = $request->password ?? " ";
        $user->profilepicture = $request->profilepicture ?? " ";
        $user->role = $request->role ?? " ";
        $user->updated_at = now();

        $user->save();
        return redirect()->route("user.index");
    }
}
