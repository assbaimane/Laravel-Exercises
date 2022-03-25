@extends("back/layouts.app")
@section('content')
    <h1 class="text-center py-4">CREATE PORTFOLIO ICI</h1>
    <div class="container">
        <form action="{{ route('portfolio.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="portfolioImg" class="form-label">Image</label>
                <input type="text" class="form-control" id="portfolioImg" name="img">
            </div>
            <div class="mb-3">
                <label for="portfolioParagraph" class="form-label">Paragraphe</label>
                <input type="text" class="form-control" id="portfolioParagraph" name="paragraph">
            </div>
            <div class="mb-3">
                <label for="portfolioButton" class="form-label">Bouton</label>
                <input type="text" class="form-control" id="portfolioButton" name="button">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
