@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='py-5'>Equipes</h1>
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
        <a class='btn btn-success' href='{{ route('equipe.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Nom</th>
                    <th scope='col'>Ville</th>
                    <th scope='col'>Pays</th>
                    <th scope='col'>Joueurs avant</th>
                    <th scope='col'>Joueurs arrière</th>
                    <th scope='col'>Joueurs centraux</th>
                    <th scope='col'>Joueurs remplaçant</th>
                    <th scope='col'>Action</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($equipes as $equipe)
                    <tr>
                        <th scope='row'>{{ $equipe->id }}</th>
                        <td>{{ $equipe->nom }}</td>
                        <td>{{ $equipe->ville }}</td>
                        <td>{{ $equipe->pays }}</td>
                        <td>/{{ $equipe->nbavant }}</td>
                        <td>/{{ $equipe->nbarriere }}</td>
                        <td>/{{ $equipe->nbcentraux }}</td>
                        <td>/{{ $equipe->nbremplacant }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('equipe.destroy', $equipe->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type='submit'>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('equipe.edit', $equipe->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('equipe.show', $equipe->id) }}' role='button'>Show</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
