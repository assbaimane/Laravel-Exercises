@extends('layout.app')
@section('content')
        <div class="container">
            <h1>User Page</h1>

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
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mot de passe</th>
                    <th scope="col">Pays</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                            <tr>
                              <th scope="row">{{ $user->id }}</th>
                              <td>{{ $user->nom }}</td>
                              <td>{{ $user->prenom }}</td>
                              <td>{{ $user->age }}</td>
                              <td>{{ $user->email }}</td>
                              <td>{{ $user->mdp }}</td>
                              <td>{{ $user->pays }}</td>
                            </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    @endsection