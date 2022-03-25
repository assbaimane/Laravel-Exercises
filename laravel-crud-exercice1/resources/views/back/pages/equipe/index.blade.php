@extends("back/layouts.app")
@section('content')
    <div class="container">
        <h1>Equipe du site</h1>
        <hr>
        <a href="{{ route('equipe.create') }}" class="btn btn-success">Create</a>
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
                @foreach ($equipes as $equipe)
                        <tr>
                        <th scope="row">{{ $equipe->id }}</th>
                        <td>{{ $equipe->img }}</td>
                        <td>{{ $equipe->paragraph }}</td>
                        <td>{{ $equipe->button }}</td>
                        <td class="d-flex">
                            <a href="{{ route("equipe.edit", $equipe->id) }}" 
                            class="btn btn-primary">Edit</a>
                            <form action="{{ route("equipe.destroy", $equipe->id) }}" method="POST">
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
