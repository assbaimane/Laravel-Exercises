@extends("back/layouts.app")
@section('content')
    <div class="container">
        <h1>Photo du site</h1>
        <hr>
        <a href="{{ route('photo.create') }}" class="btn btn-success">Create</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Logo</th>
                <th scope="col">Onglet</th>
                <th scope="col">Bouton</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($photos as $photo)
                        <tr>
                        <th scope="row">{{ $photo->id }}</th>
                        <td>{{ $photo->logo }}</td>
                        <td>{{ $photo->tabs }}</td>
                        <td>{{ $photo->button }}</td>
                        <td class="d-flex">
                            <a href="{{ route("photo.edit", $photo->id) }}" 
                            class="btn btn-primary">Edit</a>
                            <form action="{{ route("photo.destroy", $photo->id) }}" method="POST">
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