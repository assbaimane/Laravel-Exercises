@extends("back/layouts.app")
@section('content')
    <h1 class="text-center py-4">EDITE TITRE ICI</h1>
    <div class="container">
        <form action="{{ route('album.update', $album->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                {{-- albumAlbum = album: colonne de la table Album --}}
                <label for="albumAlbum" class="form-label">Album</label>
                <input type="text" class="form-control" id="albumAlbum" name="album" value="{{ $album->album }}">
            </div>
            <div class="mb-3">
                <label for="sousalbumAlbum" class="form-label">Sous-album</label>
                <input type="text" class="form-control" id="sousalbumAlbum" name="sousalbum"
                    value="{{ $album->sousalbum }}">
            </div>
            <div class="mb-3">
                <label for="descriptionAlbum" class="form-label">Description</label>
                <input type="text" class="form-control" id="descriptionAlbum" name="description"
                    value="{{ $album->description }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
