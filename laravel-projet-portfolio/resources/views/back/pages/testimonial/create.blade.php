@extends("back/layouts.app")
@section('content')
    <h1 class="text-center py-4">CREATE TESTIMONIAL ICI</h1>
    <div class="container">
        <form action="{{ route('testimonial.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="testimonialImg" class="form-label">Image</label>
                <input type="text" class="form-control" id="testimonialImg" name="img">
            </div>
            <div class="mb-3">
                <label for="testimonialName" class="form-label">Nom</label>
                <input type="text" class="form-control" id="testimonialName" name="name">
            </div>
            <div class="mb-3">
                <label for="testimonialParagraph" class="form-label">Paragraphe</label>
                <input type="text" class="form-control" id="testimonialParagraph" name="paragraph">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
