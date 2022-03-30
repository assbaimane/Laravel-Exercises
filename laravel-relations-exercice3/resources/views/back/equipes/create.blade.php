@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>equipes</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('equipe.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>nom</label>
                <input type='text' name='nom'>
            </div>
            <div>
                <label for=''>ville</label>
                <input type='text' name='ville'>
            </div>
            <div>
                <label for=''>pays</label>
                <input type='text' name='pays'>
            </div>
            <div>
                <label for=''>nbmaxavant</label>
                <input type='text' name='nbmaxavant'>
            </div>
            <div>
                <label for=''>nbmaxarriere</label>
                <input type='text' name='nbmaxarriere'>
            </div>
            <div>
                <label for=''>nbmaxcentraux</label>
                <input type='text' name='nbmaxcentraux'>
            </div>
            <div>
                <label for=''>nbmaxremplacant</label>
                <input type='text' name='nbmaxremplacant'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
