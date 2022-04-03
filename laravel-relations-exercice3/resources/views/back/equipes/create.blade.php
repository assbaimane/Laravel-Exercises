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
        <form action='{{ route('equipe.store') }}' method='post'>
            @csrf
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="nom" class="form-control" name="nom">
            </div>

            <div class="form-group">
                <label for="ville">Ville</label>
                <input type="ville" class="form-control" name="ville">
            </div>

            <div class="form-group">
                <label for="pays">Pays</label>
                <input type="pays" class="form-control" name="pays">
            </div>

            <div class="form-group">
                <label for="continent">Continent</label>
                <input type="continent" class="form-control" name="continent">
            </div>

            <div class="form-group">
                <label for="nbavant">Nombre max joueurs à l'avant</label>
                <input type="nbavant" class="form-control" name="nbavant">
            </div>

            <div class="form-group">
                <label for="nbarriere">Nombre max joueurs à l'arrière</label>
                <input type="nbarriere" class="form-control" name="nbarriere">
            </div>

            <div class="form-group">
                <label for="nbcentraux">Nombre max joueurs centraux</label>
                <input type="nbcentraux" class="form-control" name="nbcentraux">
            </div>

            <div class="form-group">
                <label for="nbremplacant">Nombre max joueurs remplacants</label>
                <input type="nbremplacant" class="form-control" name="nbremplacant">
            </div>

            <button class="mt-3 btn btn-primary" type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
