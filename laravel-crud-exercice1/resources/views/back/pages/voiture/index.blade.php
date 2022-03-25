@extends("back/layouts.app")
@section('content')
    <div class="container">
        <h1>Voiture du site</h1>
        <hr>
        <a href="{{ route('voiture.create') }}" class="btn btn-success">Create</a>
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
                @foreach ($voitures as $voiture)
                        <tr>
                        <th scope="row">{{ $voiture->id }}</th>
                        <td>{{ $voiture->img }}</td>
                        <td>{{ $voiture->paragraph }}</td>
                        <td>{{ $voiture->button }}</td>
                        <td class="d-flex">
                            <a href="{{ route("voiture.edit", $voiture->id) }}" 
                            class="btn btn-primary">Edit</a>
                            <form action="{{ route("voiture.destroy", $voiture->id) }}" method="POST">
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
