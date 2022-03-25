@extends("back/layouts.app")
@section('content')
    <div class="container">
        
        <h1>Titre du site</h1>
        <hr>
        @if(session('message'))
            <div class="row alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <a href="{{ route('titre.create') }}" class="btn btn-success">Create</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Sous-titre</th>
                <th scope="col">Description</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($titres as $titre)
                        <tr>
                        <th scope="row">{{ $titre->id }}</th>
                        <td>{{ $titre->titre }}</td>
                        <td>{{ $titre->soustitre }}</td>
                        <td>{{ $titre->description }}</td>
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