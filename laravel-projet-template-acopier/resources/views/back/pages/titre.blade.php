@extends("back/layouts.app")
@section('content')
    <div class="container">
        <h1>Titre du site</h1>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Sous-titre</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($titres as $titre)
                        <tr>
                        <th scope="row">{{ $titre->id }}</th>
                        <td>{{ $titre->titre }}</td>
                        <td>{{ $titre->soustitre }}</td>

                        <td class="d-flex">
                            <a href="{{ route("titre.edit", $titre->id) }}" 
                            class="btn btn-primary">Edit</a>
                            <form action="{{ route("titre.destroy", $titre->id) }}" method="POST">
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