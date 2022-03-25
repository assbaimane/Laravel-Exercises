@extends("back/layouts.app")
@section('content')
    <h1 class="text-center py-4">EDITE HOME ICI</h1>
    <div class="container">
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="userImg" class="form-label">Image</label>
                <input type="text" class="form-control" id="userImg" name="img" value="{{ $user->img }}">
            </div>
            <div class="mb-3">
                <label for="userParagraph" class="form-label">Paragraphe</label>
                <input type="text" class="form-control" id="userParagraph" name="paragraph" value="{{ $user->paragraph }}">
            </div>
            <div class="mb-3">
                <label for="userButton" class="form-label">Bouton</label>
                <input type="text" class="form-control" id="userButton" name="button" value="{{ $user->button }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
