@extends("back/layouts.app")
@section('content')
    <div class="container">
        
        <h1>Album du site</h1>
        <hr>
        @if(session('message'))
            <div class="row alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <a href="{{ route('album.create') }}" class="btn btn-success">Create</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Album</th>
                <th scope="col">Sous-album</th>
                <th scope="col">Description</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($albums as $album)
                        <tr>
                        <th scope="row">{{ $album->id }}</th>
                        <td>{{ $album->album }}</td>
                        <td>{{ $album->sousalbum }}</td>
                        <td>{{ $album->description }}</td>
                        <td class="d-flex">
                            <a href="{{ route("album.edit", $album->id) }}" 
                            class="btn btn-primary">Edit</a>
                            <form action="{{ route("album.destroy", $album->id) }}" method="POST">
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