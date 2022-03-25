@extends("back/layouts.app")
@section('content')
    <h1 class="text-center py-4">CREATE TITRE ICI</h1>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('titre.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                {{-- titreTitre = titre: colonne de la table Titre --}}
                <label for="titreTitre" class="form-label">Titre</label>
                <input type="text" class="form-control" id="titreTitre" name="titre">
            </div>
            <div class="mb-3">
                <label for="soustitreTitre" class="form-label">Sous-titre</label>
                <input type="text" class="form-control" id="soustitreTitre" name="soustitre">
            </div>
            <div class="mb-3">
                <label for="descriptionTitre" class="form-label">Description</label>
                <input type="text" class="form-control" id="descriptionTitre" name="description">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
