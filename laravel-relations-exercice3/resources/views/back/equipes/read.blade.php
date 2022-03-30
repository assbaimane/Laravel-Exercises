@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>equipes</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>nom</th>
                    <th scope='col'>ville</th>
                    <th scope='col'>pays</th>
                    <th scope='col'>nbmaxavant</th>
                    <th scope='col'>nbmaxarriere</th>
                    <th scope='col'>nbmaxcentraux</th>
                    <th scope='col'>nbmaxremplacant</th>
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
