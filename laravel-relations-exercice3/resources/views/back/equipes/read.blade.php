@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='py-5'>Equipes</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Nom</th>
                    <th scope='col'>Ville</th>
                    <th scope='col'>Pays</th>
                    <th scope='col'>Avant</th>
                    <th scope='col'>Arriere</th>
                    <th scope='col'>Centraux</th>
                    <th scope='col'>Remplacant</th>
                    <th scope='col'>Action</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $equipe->id }}</th>
                    <td>{{ $equipe->nom }}</td>
                    <td>{{ $equipe->ville }}</td>
                    <td>{{ $equipe->pays }}</td>
                    <td>{{ $equipe->nbmaxavant }}</td>
                    <td>{{ $equipe->nbmaxarriere }}</td>
                    <td>{{ $equipe->nbmaxcentraux }}</td>
                    <td>{{ $equipe->nbmaxremplacant }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('equipe.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
