@extends('layouts.app')
    @section('content')
        <div class="container">
            <h1>Welcome Subheading</h1>

            <div class="bg-blue-200 mt-2 mb-4  bg-white border p-1">
                <span><a href="./">Home</a> / Welcome</span>
            </div>
            <div class="card col-12 text-center">
                <div class="card-body mt-3 mb-5">
                  <h5 class="card-title fs-1">Hello CodingSchool</h5>
                  <p class="card-text">Some quick example text to make up the bulk of the card's content.</p>
                  <hr>
                  <p class="card-text">Some quick example text to build on the card.</p>
                  <a href="/about" class="btn btn-primary">About</a>
                </div>
              </div>
        </div>
    @endsection