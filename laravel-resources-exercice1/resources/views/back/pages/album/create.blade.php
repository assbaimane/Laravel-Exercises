@extends("back/layouts.app")
@section('content')
    <h1 class="text-center py-4">CREATE ALBUM ICI</h1>
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
        <form action="{{ route('album.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                {{-- albumAlbum = album: colonne de la table Album --}}
                <label for="albumAlbum" class="form-label">Album</label>
                <input type="text" class="form-control" id="albumAlbum" name="album">
            </div>
            <div class="mb-3">
                <label for="sousalbumAlbum" class="form-label">Sous-album</label>
                <input type="text" class="form-control" id="sousalbumAlbum" name="sousalbum">
            </div>
            <div class="mb-3">
                <label for="descriptionAlbum" class="form-label">Description</label>
                <input type="text" class="form-control" id="descriptionAlbum" name="description">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
