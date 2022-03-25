@extends("back/layouts.app")
@section('content')
    <h1 class="text-center py-4">CREATE NAV ICI</h1>
    <div class="container">
        <form action="{{ route('nav.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="navLogo" class="form-label">Logo</label>
                <input type="text" class="form-control" id="navLogo" name="logo">
            </div>
            <div class="mb-3">
                <label for="navTabs" class="form-label">Onglet</label>
                <input type="text" class="form-control" id="navTabs" name="tabs">
            </div>
            <div class="mb-3">
                <label for="navButton" class="form-label">Bouton</label>
                <input type="text" class="form-control" id="navButton" name="button">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
