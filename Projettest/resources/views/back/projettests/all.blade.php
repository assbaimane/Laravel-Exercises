@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Projettests</h1>
        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <a class='btn btn-success' href='{{ route('projettest.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>user</th>
                    <th scope='col'>coucou</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($projettests as $projettest)
                    <tr>
                        <th scope='row'>{{ $projettest->id }}</th>
                        <td>{{ $projettest->user }}</td>
                        <td>{{ $projettest->coucou }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('projettest.destroy', $projettest->id) }}' method='post'>
                                    @csrf
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('projettest.edit', $projettest->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('projettest.read', $projettest->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
