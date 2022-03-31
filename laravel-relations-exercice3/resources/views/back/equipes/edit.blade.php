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
                <label for="nbmaxavant">Nombre max joueurs à l'avant</label>
                <input type="nbmaxavant" class="form-control" name="nbmaxavant" value ='{{ $equipe->nbmaxavant }}'>
            </div>

            <div class="form-group">
                <label for="nbmaxarriere">Nombre max joueurs à l'arrière</label>
                <input type="nbmaxarriere" class="form-control" name="nbmaxarriere" value ='{{ $equipe->nbmaxarriere }}'>
            </div>

            <div class="form-group">
                <label for="nbmaxcentraux">Nombre max joueurs centraux</label>
                <input type="nbmaxcentraux" class="form-control" name="nbmaxcentraux" value ='{{ $equipe->nbmaxcentraux }}'>
            </div>

            <div class="form-group">
                <label for="nbmaxremplacant">Nombre max joueurs remplacants</label>
                <input type="nbmaxremplacant" class="form-control" name="nbmaxremplacant" value ='{{ $equipe->nbmaxremplacant }}'>
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
            </div> --}}
            <button class="mt-3 btn btn-primary" type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
