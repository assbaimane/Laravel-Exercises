@extends("back/layouts.app")
@section('content')
    <h1 class="text-center py-4">EDITE TESTIMONIAL ICI</h1>
    <div class="container">
        <form action="{{ route('testimonial.update', $testimonial->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="testimonialImg" class="form-label">Image</label>
                <input type="text" class="form-control" id="testimonialImg" name="img" value="{{ $testimonial->img }}">
            </div>
            <div class="mb-3">
                <label for="testimonialName" class="form-label">Nom</label>
                <input type="text" class="form-control" id="testimonialName" name="name" value="{{ $testimonial->name }}">
            </div>
            <div class="mb-3">
                <label for="testimonialParagraph" class="form-label">Paragraphe</label>
                <input type="text" class="form-control" id="testimonialParagraph" name="paragraph" value="{{ $testimonial->paragraph }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
