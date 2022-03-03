@extends('layout.app')
    @section('content')
        <div class="container">
            <h1>Equipe Page</h1>

            <div class="bg-blue-200 mt-2 mb-4  bg-white border p-1">
                <span><a href="./">Home</a> / Direction</span>
                <p>Please, change directory using navbar</p>
            </div>

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Commune</th>
                    <th scope="col">Nombre de joueurs</th>
                    <th scope="col">Nombre de postes</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($equipes as $equipe)
                            <tr>
                              <th scope="row">{{ $equipe->id }}</th>
                              <td>{{ $equipe->nom }}</td>
                              <td>{{ $equipe->ville }}</td>
                              <td>{{ $equipe->commune }}</td>
                              <td>{{ $equipe->nbjoueurs }}</td>
                              <td>{{ $equipe->nbpostes }}</td>
                            </tr>
                    @endforeach
                </tbody>
              </table>
            
        </div>
    @endsection