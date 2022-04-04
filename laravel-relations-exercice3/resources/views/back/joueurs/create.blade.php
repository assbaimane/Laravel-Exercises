@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class="my-3">Joueurs</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('joueur.store') }}' method='post' enctype="multipart/form-data"> 
            @csrf
            <div class="mb-3 col-11">
                <label for="joueurNom" class="form-label">Nom<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="joueurNom" name="nom">
            </div>
            <div class="mb-3 col-11">
                <label for="joueurPrenom" class="form-label">Prénom<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="joueurPrenom" name="prenom">
            </div>
            <div class="mb-3 col-11">
                <label for="joueurAge" class="form-label">Age<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="joueurAge" name="age">
            </div>
            <div class="mb-3 col-11">
                <label for="joueurTelephone" class="form-label">Téléphone<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="joueurTelephone" name="telephone">
            </div>
            <div class="mb-3 col-11">
                <label for="joueurEmail" class="form-label">Email<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="joueurEmail" name="email">
            </div>
            <div class="mb-3 col-11">
                <label for="joueurGenre" class="form-label">Genre<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="joueurGenre" name="genre">
            </div>
            <div class="mb-3 col-11">
                <label for="joueurPays_origine" class="form-label">Pays d'Origine<span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control" id="joueurPays_origine" name="origine">
            </div>
            {{-- Role --}}
            <div class="mb-3 col-6">
                <div class="form-group">
                    <label class="mb-2">Role</label>
                    <select name="role_id" class="form-control">
                        <option value="{{ null }}">-</option>
                        @foreach ($roles as $item)
                            <option value="{{ $item->id }}">{{ $item->role }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- Role --}}
            <div class="mb-3 col-6">
                <div class="form-group">
                    <label class="mb-2">Equipe</label>
                    <select name="equipe_id" class="form-control">
                        <option value="{{ null }}">-</option>
                        @foreach ($equipes as $item)
                            <option value="{{ $item->id }}">{{ $item->nom }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 col-11">
                <label for="joueurPhoto" class="form-label">Photo</label>
                <input type="file" class="form-control" id="joueurPhoto" name="photo">
            </div>
            <button type='submit' class="btn btn-success my-4">Ajouter Joueur</button> {{-- create_blade_anchor --}}
            <a class='btn btn-secondary ms-3' href='{{ route('joueur.index') }}' role='button'>Annuler</a>
        </form>
    </div>
@endsection