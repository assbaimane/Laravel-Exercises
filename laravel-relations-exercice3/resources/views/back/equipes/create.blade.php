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
                <label for="nbmaxavant">Nombre max joueurs à l'avant</label>
                <input type="nbmaxavant" class="form-control" name="nbmaxavant">
            </div>

            <div class="form-group">
                <label for="nbmaxarriere">Nombre max joueurs à l'arrière</label>
                <input type="nbmaxarriere" class="form-control" name="nbmaxarriere">
            </div>

            <div class="form-group">
                <label for="nbmaxcentraux">Nombre max joueurs centraux</label>
                <input type="nbmaxcentraux" class="form-control" name="nbmaxcentraux">
            </div>

            <div class="form-group">
                <label for="nbmaxremplacant">Nombre max joueurs remplacants</label>
                <input type="nbmaxremplacant" class="form-control" name="nbmaxremplacant">
            </div>

            <button class="mt-3 btn btn-primary" type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
