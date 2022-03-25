@extends("back/layouts.app")
@section('content')
    <h1 class="text-center py-4">EDITE FEATURE ICI</h1>
    <div class="container">
        <form action="{{ route('feature.update', $feature->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="featureImg" class="form-label">Image</label>
                <input type="text" class="form-control" id="featureImg" name="img" value="{{ $feature->img }}">
            </div>
            <div class="mb-3">
                <label for="featureParagraph" class="form-label">Paragraphe</label>
                <input type="text" class="form-control" id="featureParagraph" name="paragraph" value="{{ $feature->paragraph }}">
            </div>
            <div class="mb-3">
                <label for="featureButton" class="form-label">Bouton</label>
                <input type="text" class="form-control" id="featureButton" name="button" value="{{ $feature->button }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
