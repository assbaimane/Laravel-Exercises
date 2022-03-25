@extends("back/layouts.app")
@section('content')
    <div class="container">
        <h1>Navbar du site</h1>
        <hr>
        <a href="{{ route('nav.create') }}" class="btn btn-success">Create</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Logo</th>
                <th scope="col">Onglet</th>
                <th scope="col">Bouton</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($navs as $nav)
                        <tr>
                        <th scope="row">{{ $nav->id }}</th>
                        <td>{{ $nav->logo }}</td>
                        <td>{{ $nav->tabs }}</td>
                        <td>{{ $nav->button }}</td>
                        <td class="d-flex">
                            <a href="{{ route("nav.edit", $nav->id) }}" 
                            class="btn btn-primary">Edit</a>
                            <form action="{{ route("nav.destroy", $nav->id) }}" method="POST">
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