@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Projettests</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('projettest.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>user</label>
                <input type='text' name='user'>
            </div>
            <div>
                <label for=''>coucou</label>
                <input type='text' name='coucou'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
