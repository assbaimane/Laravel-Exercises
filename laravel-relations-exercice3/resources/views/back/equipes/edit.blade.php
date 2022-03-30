@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>equipes</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('equipe.update' , $equipe->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>nom</label>
                <input type='text' name='nom' value='{{ $equipe->nom }}'>
            </div>
            <div>
                <label for=''>ville</label>
                <input type='text' name='ville' value='{{ $equipe->ville }}'>
            </div>
            <div>
                <label for=''>pays</label>
                <input type='text' name='pays' value='{{ $equipe->pays }}'>
            </div>
            <div>
                <label for=''>nbmaxavant</label>
                <input type='text' name='nbmaxavant' value='{{ $equipe->nbmaxavant }}'>
            </div>
            <div>
                <label for=''>nbmaxarriere</label>
                <input type='text' name='nbmaxarriere' value='{{ $equipe->nbmaxarriere }}'>
            </div>
            <div>
                <label for=''>nbmaxcentraux</label>
                <input type='text' name='nbmaxcentraux' value='{{ $equipe->nbmaxcentraux }}'>
            </div>
            <div>
                <label for=''>nbmaxremplacant</label>
                <input type='text' name='nbmaxremplacant' value='{{ $equipe->nbmaxremplacant }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
