@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Joueur</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Nom</th>
                    <th scope='col'>Prenom</th>
                    <th scope='col'>Age</th>
                    <th scope='col'>Telephone</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>Genre</th>
                    <th scope='col'>Origine</th>
                    <th scope='col'>Photo</th>
                    <th scope='col'>Role</th>
                    <th scope='col'>Equipe</th>
                    <th scope='col'>Action</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $joueur->id }}</th>
                    <td>{{ $joueur->nom }}</td>
                    <td>{{ $joueur->prenom }}</td>
                    <td>{{ $joueur->age }}</td>
                    <td>{{ $joueur->telephone }}</td>
                    <td>{{ $joueur->email }}</td>
                    <td>{{ $joueur->genre }}</td>
                    <td>{{ $joueur->origine }}</td>
                    <td><img src="{{ asset('img/'.$joueur->photos->photo) }}" height="60px" width="50px"/></td> 
                    <td>{{ $roles[($joueur->role_id)-1]->role }}</td>
                    <td>{{ $equipes[($joueur->equipe_id)-1]->nom }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('joueur.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
