@extends("back/layouts.app")
@section('content')
    <h1 class="text-center py-4">EDITE NAV ICI</h1>
    <div class="container">
        <form action="{{ route('nav.update', $nav->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="navLogo" class="form-label">Logo</label>
                <input type="text" class="form-control" id="navLogo" name="logo" value="{{ $nav->logo }}">
            </div>
            <div class="mb-3">
                <label for="navTabs" class="form-label">Onglet</label>
                <input type="text" class="form-control" id="navTabs" name="tabs" value="{{ $nav->tabs }}">
            </div>
            <div class="mb-3">
                <label for="navButton" class="form-label">Bouton</label>
                <input type="text" class="form-control" id="navButton" name="button" value="{{ $nav->button }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
