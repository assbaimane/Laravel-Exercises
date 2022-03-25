@extends("back/layouts.app")
@section('content')
    <h1 class="text-center py-4">EDITE PORTFOLIO ICI</h1>
    <div class="container">
        <form action="{{ route('voiture.update', $voiture->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="voitureImg" class="form-label">Image</label>
                <input type="text" class="form-control" id="voitureImg" name="img" value="{{ $voiture->img }}">
            </div>
            <div class="mb-3">
                <label for="voitureParagraph" class="form-label">Paragraphe</label>
                <input type="text" class="form-control" id="voitureParagraph" name="paragraph" value="{{ $voiture->paragraph }}">
            </div>
            <div class="mb-3">
                <label for="voitureButton" class="form-label">Bouton</label>
                <input type="text" class="form-control" id="voitureButton" name="button" value="{{ $voiture->button }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
