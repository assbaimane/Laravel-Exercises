@extends("back/layouts.app")
@section('content')
    <div class="mb-5">
        <h1 class="fs-2"><b class="fs-1">Hello</b>,<br> bienvenue sur le site officiel des fans de Volleyball</h1>
        <h2 class="fs-3 moutarde">Chaque semaine, nous mettons à l'honneur les meilleurs de chaque catégories !</h2>
    </div>

    {{-- SECTION LES EQUIPES --}}
    <h3>LES EQUIPES</h4>
    <div class="row mx-auto">
        <div class="col-5 mt-3">
            <h4 class="purple">Les équipes remplies</h4>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>Nom</th>
                        <th scope='col'>Pays</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    {{-- @foreach ($equipes as $equipe) --}}
                        <tr>
                            <th scope='row'>equipe->id</th>
                            <td>$equipe->nom</td>
                            <td>$equipe->pays</td>
                        </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
        {{--  VERSUS --}}
        <span class="col-1 d-flex align-items-center justify-content-center moutarde bg-dark rounded"><b>VS</b></span>
        {{-- Equipes non remplies  --}}
        <div class="col-5 mt-3">
            <h4 class="purple">Les équipes non-remplies</h4>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>Nom</th>
                        <th scope='col'>Pays</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    {{-- @foreach ($equipes as $equipe) --}}
                        <tr>
                            <th scope='row'>equipe->id</th>
                            <td>$equipe->nom</td>
                            <td>$equipe->pays</td>
                        </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
    {{-- ----------------- --}}
    <div class="row mx-auto mt-3 pb-5">
        <div class="col-5 mt-3">
            <h4 class="purple">Les équipes d'Europe</h4>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>Nom</th>
                        <th scope='col'>Pays</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    {{-- @foreach ($equipes as $equipe) --}}
                        <tr>
                            <th scope='row'>equipe->id</th>
                            <td>$equipe->nom</td>
                            <td>$equipe->pays</td>
                        </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
        {{--  VERSUS --}}
        <span class="col-1 d-flex align-items-center justify-content-center moutarde bg-dark rounded"><b>VS</b></span>
        {{-- Equipes non remplies  --}}
        <div class="col-5 mt-3">
            <h4 class="purple">Les équipes Hors-Europe</h4>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>Nom</th>
                        <th scope='col'>Pays</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    {{-- @foreach ($equipes as $equipe) --}}
                        <tr>
                            <th scope='row'>equipe->id</th>
                            <td>$equipe->nom</td>
                            <td>$equipe->pays</td>
                        </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>

    <hr>

    {{-- SECTION LES JOUEURS --}}
    <h3 class="pt-5">LES JOUEURS</h4>
        <div class="row mx-auto">
            <div class="col-5 mt-3">
                <h4 class="purple">Les joueurs avec équipe</h4>
                <table class='table'>
                    <thead>
                        <tr>
                            <th scope='col'>ID</th>
                            <th scope='col'>Nom</th>
                            <th scope='col'>Pays</th>
                        </tr> {{-- all_tr_anchor --}}
                    </thead>
                    <tbody>
                        {{-- @foreach ($equipes as $equipe) --}}
                            <tr>
                                <th scope='row'>equipe->id</th>
                                <td>$equipe->nom</td>
                                <td>$equipe->pays</td>
                            </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
            {{--  VERSUS --}}
            <span class="col-1 d-flex align-items-center justify-content-center moutarde bg-dark rounded"><b>VS</b></span>
            {{-- Equipes non remplies  --}}
            <div class="col-5 mt-3">
                <h4 class="purple">Les joueurs sans équipes</h4>
                <table class='table'>
                    <thead>
                        <tr>
                            <th scope='col'>ID</th>
                            <th scope='col'>Nom</th>
                            <th scope='col'>Pays</th>
                        </tr> {{-- all_tr_anchor --}}
                    </thead>
                    <tbody>
                        {{-- @foreach ($equipes as $equipe) --}}
                            <tr>
                                <th scope='row'>equipe->id</th>
                                <td>$equipe->nom</td>
                                <td>$equipe->pays</td>
                            </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>


        {{-- ----------------- --}}
        <div class="row mx-auto mt-3 pb-5">
            <div class="col-5 mt-3">
                <h4 class="purple">Les joueurs masculins</h4>
                <table class='table'>
                    <thead>
                        <tr>
                            <th scope='col'>ID</th>
                            <th scope='col'>Nom</th>
                            <th scope='col'>Pays</th>
                        </tr> {{-- all_tr_anchor --}}
                    </thead>
                    <tbody>
                        {{-- @foreach ($equipes as $equipe) --}}
                            <tr>
                                <th scope='row'>equipe->id</th>
                                <td>$equipe->nom</td>
                                <td>$equipe->pays</td>
                            </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
            {{--  VERSUS --}}
            <span class="col-1 d-flex align-items-center justify-content-center moutarde bg-dark rounded"><b>VS</b></span>
            {{-- Equipes non remplies  --}}
            <div class="col-5 mt-3">
                <h4 class="purple">Les joueurs féminins</h4>
                <table class='table'>
                    <thead>
                        <tr>
                            <th scope='col'>ID</th>
                            <th scope='col'>Nom</th>
                            <th scope='col'>Pays</th>
                        </tr> {{-- all_tr_anchor --}}
                    </thead>
                    <tbody>
                        {{-- @foreach ($equipes as $equipe) --}}
                            <tr>
                                <th scope='row'>equipe->id</th>
                                <td>$equipe->nom</td>
                                <td>$equipe->pays</td>
                            </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>

         {{-- ----------------- --}}
         <div class="row mx-auto mt-3 pb-5">
            <div class="col-12 mt-3">
                <h4 class="purple">Les joueurs qui représentent leurs pays d'origine</h4>
                <table class='table'>
                    <thead>
                        <tr>
                            <th scope='col'>ID</th>
                            <th scope='col'>Nom</th>
                            <th scope='col'>Pays</th>
                        </tr> {{-- all_tr_anchor --}}
                    </thead>
                    <tbody>
                        {{-- @foreach ($equipes as $equipe) --}}
                            <tr>
                                <th scope='row'>equipe->id</th>
                                <td>$equipe->nom</td>
                                <td>$equipe->pays</td>
                            </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
@endsection