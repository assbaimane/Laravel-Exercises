@extends("back/layouts.app")
@section('content')
    <div class="container">
        <h1>Footer du site</h1>
        <hr>
        <a href="{{ route('footer.create') }}" class="btn btn-success">Create</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Réseau Social 1</th>
                <th scope="col">Réseau Social 2</th>
                <th scope="col">Réseau Social 3</th>
                <th scope="col">Réseau Copyright</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($footers as $footer)
                        <tr>
                        <th scope="row">{{ $footer->id }}</th>
                        <td>{{ $footer->social1 }}</td>
                        <td>{{ $footer->social2 }}</td>
                        <td>{{ $footer->social3 }}</td>
                        <td>{{ $footer->copyright }}</td>
                        <td class="d-flex">
                            <a href="{{ route("footer.edit", $footer->id) }}" 
                            class="btn btn-primary">Edit</a>
                            <form action="{{ route("footer.destroy", $footer->id) }}" method="POST">
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