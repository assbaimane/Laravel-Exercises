@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>equipes</h1>
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
                    <th scope='col'>Action</th>
                    <th scope='col'>nom</th>
                    <th scope='col'>ville</th>
                    <th scope='col'>pays</th>
                    <th scope='col'>nbmaxavant</th>
                    <th scope='col'>nbmaxarriere</th>
                    <th scope='col'>nbmaxcentraux</th>
                    <th scope='col'>nbmaxremplacant</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($equipes as $equipe)
                    <tr>
                        <th scope='row'>{{ $equipe->id }}</th>
                        <td>{{ $equipe->nom }}</td>
                        <td>{{ $equipe->ville }}</td>
                        <td>{{ $equipe->pays }}</td>
                        <td>{{ $equipe->nbmaxavant }}</td>
                        <td>{{ $equipe->nbmaxarriere }}</td>
                        <td>{{ $equipe->nbmaxcentraux }}</td>
                        <td>{{ $equipe->nbmaxremplacant }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('equipe.destroy', $equipe->id) }}' method='post'>
                                    @csrf
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('equipe.edit', $equipe->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('equipe.read', $equipe->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
