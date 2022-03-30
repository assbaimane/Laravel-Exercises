@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>joueurs</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('joueur.update' , $joueur->id) }}' method='post'>
            @csrf
            @method('put')
            <div>
                <label for=''>nom</label>
                <input type='text' name='nom' value='{{ $joueur->nom }}'>
            </div>
            <div>
                <label for=''>prenom</label>
                <input type='text' name='prenom' value='{{ $joueur->prenom }}'>
            </div>
            <div>
                <label for=''>age</label>
                <input type='text' name='age' value='{{ $joueur->age }}'>
            </div>
            <div>
                <label for=''>telephone</label>
                <input type='text' name='telephone' value='{{ $joueur->telephone }}'>
            </div>
            <div>
                <label for=''>email</label>
                <input type='text' name='email' value='{{ $joueur->email }}'>
            </div>
            <div>
                <label for=''>genre</label>
                <input type='text' name='genre' value='{{ $joueur->genre }}'>
            </div>
            <div>
                <label for=''>origine</label>
                <input type='text' name='origine' value='{{ $joueur->origine }}'>
            </div>
            <div>
                <label for=''>role</label>
                <input type='text' name='role' value='{{ $joueur->role }}'>
            </div>
            <div>
                <label for=''>photo</label>
                <input type='text' name='photo' value='{{ $joueur->photo }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
