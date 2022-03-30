@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>users</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('users.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>nom</label>
                <input type='text' name='nom'>
            </div>
            <div>
                <label for=''>prenom</label>
                <input type='text' name='prenom'>
            </div>
            <div>
                <label for=''>age</label>
                <input type='text' name='age'>
            </div>
            <div>
                <label for=''>email</label>
                <input type='text' name='email'>
            </div>
            <div>
                <label for=''>mdp</label>
                <input type='text' name='mdp'>
            </div>
            <div>
                <label for=''>datenaissance</label>
                <input type='text' name='datenaissance'>
            </div>
            <div>
                <label for=''>genre</label>
                <input type='text' name='genre'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
