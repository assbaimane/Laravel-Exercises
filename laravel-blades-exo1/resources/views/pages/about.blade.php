@extends('layouts.app')
@section('content')
<link rel="stylesheet" href={{ asset('sass/pages/about.blade.sass') }}>
        <div class="text-center">
                <div class="bannerAbout">
                    <h1>About us !</h1>
                    <h2>Notre entreprise est une famille</h2>
                </div>
                <ul>
                    <li>Confiance</li>
                    <li>Liberté</li>
                    <li>Humour</li>
                </ul>
            </div>
            <div class="row">
                <a href="/">
                    <button>Retour</button>
                </a>
            </div>
        </div>
    @endsection
