@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='py-5'>Joueurs</h1>
        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <a class='btn btn-success' href='{{ route('joueur.create') }}' role='button'>Create</a>
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
                    <th scope='col'>Role</th>
                    <th scope='col'>Equipe</th>
                    <th scope='col'>Photo</th>
                    <th scope='col'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($joueurs as $joueur)
                    <tr>
                        <th scope='row'>{{ $joueur->id }}</th>
                        <td>{{ $joueur->nom }}</td>
                        <td>{{ $joueur->prenom }}</td>
                        <td>{{ $joueur->age }}</td>
                        <td>{{ $joueur->telephone }}</td>
                        <td>{{ $joueur->email }}</td>
                        <td>{{ $joueur->genre }}</td>
                        <td>{{ $joueur->origine }}</td>
                        <td>{{ $joueur->role_id }}</td>
                        <td>{{ $joueur->equipe_id }}</td>
                        <td><img src="{{ asset('img/'.$joueur->photos->photo) }}"/></td> 
                        {{-- faire appel a la fonction photos puis la props --}}
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('joueur.destroy', $joueur->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class='btn btn-danger' type='submit'>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('joueur.edit', $joueur->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('joueur.show', $joueur->id) }}' role='button'>Show</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
