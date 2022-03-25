@extends("back/layouts.app")
@section('content')
    <h1 class="text-center py-4">EDITE TESTIMONIAL ICI</h1>
    <div class="container">
        <form action="{{ route('article.update', $article->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="articleImg" class="form-label">Image</label>
                <input type="text" class="form-control" id="articleImg" name="img" value="{{ $article->img }}">
            </div>
            <div class="mb-3">
                <label for="articleName" class="form-label">Nom</label>
                <input type="text" class="form-control" id="articleName" name="name" value="{{ $article->name }}">
            </div>
            <div class="mb-3">
                <label for="articleParagraph" class="form-label">Paragraphe</label>
                <input type="text" class="form-control" id="articleParagraph" name="paragraph" value="{{ $article->paragraph }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
