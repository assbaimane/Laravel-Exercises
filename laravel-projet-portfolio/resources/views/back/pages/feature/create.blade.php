@extends("back/layouts.app")
@section('content')
    <h1 class="text-center py-4">CREATE FEATURE ICI</h1>
    <div class="container">
        <form action="{{ route('feature.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="featureImg" class="form-label">Image</label>
                <input type="text" class="form-control" id="featureImg" name="img"">
            </div>
            <div class="mb-3">
                <label for="featureParagraph" class="form-label">Paragraphe</label>
                <input type="text" class="form-control" id="featureParagraph" name="paragraph">
            </div>
            <div class="mb-3">
                <label for="featureButton" class="form-label">Bouton</label>
                <input type="text" class="form-control" id="featureButton" name="button">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
