@extends("back/layouts.app")
@section('content')
    <h1 class="text-center py-4">EDITE TITRE ICI</h1>
    <div class="container">
        <form action="{{ route('titre.update', $titre->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                {{-- titreTitre = titre: colonne de la table Titre --}}
                <label for="titreTitre" class="form-label">Titre</label>
                <input type="text" class="form-control" id="titreTitre" name="titre" value="{{ $titre->titre }}">
            </div>
            <div class="mb-3">
                <label for="soustitreTitre" class="form-label">Sous-titre</label>
                <input type="text" class="form-control" id="soustitreTitre" name="soustitre"
                    value="{{ $titre->soustitre }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
