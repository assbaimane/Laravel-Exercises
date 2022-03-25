@extends("back/layouts.app")
@section('content')
    <h1 class="text-center py-4">EDITE HOME ICI</h1>
    <div class="container">
        <form action="{{ route('home.update', $home->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="homeImg" class="form-label">Image</label>
                <input type="text" class="form-control" id="homeImg" name="img" value="{{ $home->img }}">
            </div>
            <div class="mb-3">
                <label for="homeParagraph" class="form-label">Paragraphe</label>
                <input type="text" class="form-control" id="homeParagraph" name="paragraph" value="{{ $home->paragraph }}">
            </div>
            <div class="mb-3">
                <label for="homeButton" class="form-label">Bouton</label>
                <input type="text" class="form-control" id="homeButton" name="button" value="{{ $home->button }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
