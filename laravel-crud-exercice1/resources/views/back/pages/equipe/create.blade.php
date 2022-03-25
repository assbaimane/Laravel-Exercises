@extends("back/layouts.app")
@section('content')
    <h1 class="text-center py-4">CREATE FEATURE ICI</h1>
    <div class="container">
        <form action="{{ route('equipe.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="equipeImg" class="form-label">Image</label>
                <input type="text" class="form-control" id="equipeImg" name="img"">
            </div>
            <div class="mb-3">
                <label for="equipeParagraph" class="form-label">Paragraphe</label>
                <input type="text" class="form-control" id="equipeParagraph" name="paragraph">
            </div>
            <div class="mb-3">
                <label for="equipeButton" class="form-label">Bouton</label>
                <input type="text" class="form-control" id="equipeButton" name="button">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
