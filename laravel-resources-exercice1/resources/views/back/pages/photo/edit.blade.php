@extends("back/layouts.app")
@section('content')
    <h1 class="text-center py-4">EDITE PHOTO ICI</h1>
    <div class="container">
        <form action="{{ route('photo.update', $photo->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="photoLogo" class="form-label">Logo</label>
                <input type="text" class="form-control" id="photoLogo" name="logo" value="{{ $photo->logo }}">
            </div>
            <div class="mb-3">
                <label for="photoTabs" class="form-label">Onglet</label>
                <input type="text" class="form-control" id="photoTabs" name="tabs" value="{{ $photo->tabs }}">
            </div>
            <div class="mb-3">
                <label for="photoButton" class="form-label">Bouton</label>
                <input type="text" class="form-control" id="photoButton" name="button" value="{{ $photo->button }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
