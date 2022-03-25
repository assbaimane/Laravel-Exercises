@extends("back/layouts.app")
@section('content')
    <div class="container">
        <h1>Portfolio du site</h1>
        <hr>
        <a href="{{ route('portfolio.create') }}" class="btn btn-success">Create</a>
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
                @foreach ($portfolios as $portfolio)
                        <tr>
                        <th scope="row">{{ $portfolio->id }}</th>
                        <td>{{ $portfolio->img }}</td>
                        <td>{{ $portfolio->paragraph }}</td>
                        <td>{{ $portfolio->button }}</td>
                        <td class="d-flex">
                            <a href="{{ route("portfolio.edit", $portfolio->id) }}" 
                            class="btn btn-primary">Edit</a>
                            <form action="{{ route("portfolio.destroy", $portfolio->id) }}" method="POST">
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
