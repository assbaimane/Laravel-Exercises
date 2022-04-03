@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Equipes</h1>
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
            @method('put')
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="nom" class="form-control" name="nom" value ='{{ $equipe->nom }}'>
            </div>

            <div class="form-group">
                <label for="ville">Ville</label>
                <input type="ville" class="form-control" name="ville" value ='{{ $equipe->ville }}'>
            </div>

            <div class="form-group">
                <label for="pays">Pays</label>
                <input type="pays" class="form-control" name="pays" value ='{{ $equipe->pays }}'>
            </div>

            <div class="form-group">
                <label for="continent">Continent</label>
                <input type="continent" class="form-control" name="continent" value ='{{ $equipe->continent }}'>
            </div>

            <div class="form-group">
                <label for="nbavant">Nombre max joueurs à l'avant</label>
                <input type="nbavant" class="form-control" name="nbavant" value ='{{ $equipe->nbavant }}'>
            </div>

            <div class="form-group">
                <label for="nbarriere">Nombre max joueurs à l'arrière</label>
                <input type="nbarriere" class="form-control" name="nbarriere" value ='{{ $equipe->nbarriere }}'>
            </div>

            <div class="form-group">
                <label for="nbcentraux">Nombre max joueurs centraux</label>
                <input type="nbcentraux" class="form-control" name="nbcentraux" value ='{{ $equipe->nbcentraux }}'>
            </div>

            <div class="form-group">
                <label for="nbremplacant">Nombre max joueurs remplacants</label>
                <input type="nbremplacant" class="form-control" name="nbremplacant" value ='{{ $equipe->nbremplacant }}'>
            </div>

            {{-- <div>
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
            </div> --}}
            {{-- <div>
                <label for=''>nbavant</label>
                <input type='text' name='nbavant' value='{{ $equipe->nbavant }}'>
            </div>
            <div>
                <label for=''>nbarriere</label>
                <input type='text' name='nbarriere' value='{{ $equipe->nbarriere }}'>
            </div>
            <div>
                <label for=''>nbcentraux</label>
                <input type='text' name='nbcentraux' value='{{ $equipe->nbcentraux }}'>
            </div>
            <div>
                <label for=''>nbremplacant</label>
                <input type='text' name='nbremplacant' value='{{ $equipe->nbremplacant }}'>
            </div> --}}
            <button class="mt-3 btn btn-primary" type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
