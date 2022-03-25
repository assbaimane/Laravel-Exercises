@extends("back/layouts.app")
@section('content')
    <div class="container">
        <h1>User du site</h1>
        <hr>
        <a href="{{ route('user.create') }}" class="btn btn-success">Create</a>
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
                @foreach ($users as $user)
                        <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->img }}</td>
                        <td>{{ $user->paragraph }}</td>
                        <td>{{ $user->button }}</td>
                        <td class="d-flex">
                            <a href="{{ route("user.edit", $user->id) }}" 
                            class="btn btn-primary">Edit</a>
                            <form action="{{ route("user.destroy", $user->id) }}" method="POST">
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
