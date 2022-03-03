@extends('layout.app')
    @section('content')
        <div class="container">
            <h1>Article Page</h1>

            <div class="bg-blue-200 mt-2 mb-4  bg-white border p-1">
                <span><a href="./">Home</a> / Direction</span>
                <p>Please, change directory using navbar</p>
            </div>

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Date</th>
                    <th scope="col">Contenu</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                            <tr>
                              <th scope="row">{{ $article->id }}</th>
                              <td>{{ $article->nom }}</td>
                              <td>{{ $article->prenom }}</td>
                              <td>{{ $article->date }}</td>
                              <td>{{ $article->contenu }}</td>
                            </tr>
                    @endforeach
                </tbody>
              </table>
            
        </div>
    @endsection