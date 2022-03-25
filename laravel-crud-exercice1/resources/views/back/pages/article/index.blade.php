@extends("back/layouts.app")
@section('content')
    <div class="container">
        <h1>Article du site</h1>
        <hr>
        <a href="{{ route('article.create') }}" class="btn btn-success">Create</a>
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
                @foreach ($articles as $article)
                        <tr>
                        <th scope="row">{{ $article->id }}</th>
                        <td>{{ $article->img }}</td>
                        <td>{{ $article->name }}</td>
                        <td>{{ $article->paragraph }}</td>
                        <td class="d-flex">
                            <a href="{{ route("article.edit", $article->id) }}" 
                            class="btn btn-primary">Edit</a>
                            <form action="{{ route("article.destroy", $article->id) }}" method="POST">
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
