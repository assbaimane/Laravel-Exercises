@extends("back/layouts.app")
@section('content')
    <div class="container">
        <h1>Home du site</h1>
        <hr>
        <a href="{{ route('home.create') }}" class="btn btn-success">Create</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Paragraphe</th>
                <th scope="col">Bouton</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($homes as $home)
                        <tr>
                        <th scope="row">{{ $home->id }}</th>
                        <td>{{ $home->img }}</td>
                        <td>{{ $home->paragraph }}</td>
                        <td>{{ $home->button }}</td>
                        <td class="d-flex">
                            <a href="{{ route("home.edit", $home->id) }}" 
                            class="btn btn-primary">Edit</a>
                            <form action="{{ route("home.destroy", $home->id) }}" method="POST">
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
