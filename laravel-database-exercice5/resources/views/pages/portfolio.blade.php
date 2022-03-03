@extends('layout.app')
    @section('content')
        <div class="container">
            <h1>Portfolio Page</h1>

            <div class="bg-blue-200 mt-2 mb-4  bg-white border p-1">
                <span><a href="./">Home</a> / Direction</span>
                <p>Please, change directory using navbar</p>
            </div>

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($portfolios as $portfolio)
                            <tr>
                              <th scope="row">{{ $portfolio->id }}</th>
                              <td>{{ $portfolio->nom }}</td>
                              <td>{{ $portfolio->image }}</td>
                              <td>{{ $portfolio->description }}</td>
                            </tr>
                    @endforeach
                </tbody>
              </table>
            
        </div>
    @endsection