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
        <form action='{{ route('projettest.update' , $projettest->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>user</label>
                <input type='text' name='user' value='{{ $projettest->user }}'>
            </div>
            <div>
                <label for=''>coucou</label>
                <input type='text' name='coucou' value='{{ $projettest->coucou }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
