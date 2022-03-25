<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
        $testimonials = Testimonial::all();
        return view("back.pages.testimonial.index", compact("testimonials"));
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view("back/pages/testimonial.edit", compact("testimonial"));
    }

    public function update($id, Request $request)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->img = $request->img ?? " ";
        $testimonial->name = $request->name ?? " ";
        $testimonial->paragraph = $request->paragraph ?? " ";
        $testimonial->updated_at = now();

        $testimonial->save();
        return redirect()->route("testimonial.index");
    }

    public function create()
    {
        return view("back/pages/testimonial.create");
    }

    public function store(Request $request)
    {
        $testimonial = new Testimonial;
        $testimonial->img = $request->img ?? " ";
        $testimonial->name = $request->name ?? " ";
        $testimonial->paragraph = $request->paragraph ?? " ";
        $testimonial->updated_at = now();

        $testimonial->save();
        return redirect()->route("testimonial.index");
    }
}
