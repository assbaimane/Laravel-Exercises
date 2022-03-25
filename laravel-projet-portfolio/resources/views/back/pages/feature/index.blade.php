@extends("back/layouts.app")
@section('content')
    <div class="container">
        <h1>Feature du site</h1>
        <hr>
        <a href="{{ route('feature.create') }}" class="btn btn-success">Create</a>
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
                @foreach ($features as $feature)
                        <tr>
                        <th scope="row">{{ $feature->id }}</th>
                        <td>{{ $feature->img }}</td>
                        <td>{{ $feature->paragraph }}</td>
                        <td>{{ $feature->button }}</td>
                        <td class="d-flex">
                            <a href="{{ route("feature.edit", $feature->id) }}" 
                            class="btn btn-primary">Edit</a>
                            <form action="{{ route("feature.destroy", $feature->id) }}" method="POST">
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
