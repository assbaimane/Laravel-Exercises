@extends("back/layouts.app")
@section('content')
    <h1 class="text-center py-4">CREATE PHOTO ICI</h1>
    <div class="container">
        <form action="{{ route('photo.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="photoLogo" class="form-label">Logo</label>
                <input type="text" class="form-control" id="photoLogo" name="logo">
            </div>
            <div class="mb-3">
                <label for="photoTabs" class="form-label">Onglet</label>
                <input type="text" class="form-control" id="photoTabs" name="tabs">
            </div>
            <div class="mb-3">
                <label for="photoButton" class="form-label">Bouton</label>
                <input type="text" class="form-control" id="photoButton" name="button">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
