@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Projettests</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>user</th>
                    <th scope='col'>coucou</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $projettest->id }}</th>
                    <td>{{ $projettest->user }}</td>
                    <td>{{ $projettest->coucou }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('projettest.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
