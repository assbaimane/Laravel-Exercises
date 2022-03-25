@extends("back/layouts.app")
@section('content')
    <div class="container">
        <h1>Testimonial du site</h1>
        <hr>
        <a href="{{ route('testimonial.create') }}" class="btn btn-success">Create</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Nom</th>
                <th scope="col">Paragraphe</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($testimonials as $testimonial)
                        <tr>
                        <th scope="row">{{ $testimonial->id }}</th>
                        <td>{{ $testimonial->img }}</td>
                        <td>{{ $testimonial->name }}</td>
                        <td>{{ $testimonial->paragraph }}</td>
                        <td class="d-flex">
                            <a href="{{ route("testimonial.edit", $testimonial->id) }}" 
                            class="btn btn-primary">Edit</a>
                            <form action="{{ route("testimonial.destroy", $testimonial->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>

                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
