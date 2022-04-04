@extends("back/layouts.app")
@section('content')
    <div class="mb-5">
        <h1 class="fs-2"><b class="fs-1">Hello</b>,<br> bienvenue sur le site officiel des fans de Volleyball</h1>
        <h2 class="fs-3 moutarde">Chaque semaine, nous mettons à l'honneur les meilleurs de chaque catégories !</h2>
    </div>

    {{-- SECTION LES EQUIPES --}}
    <h3>LES EQUIPES</h4>
    {{-- Equipe complete vs non complete --}}
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
                    @foreach ($equipesCompletes as $equipeComplete)
                        <tr>
                            <th scope='row'>{{  $equipeComplete->id }}</th>
                            <td>{{  $equipeComplete->nom }}</td>
                            <td>{{  $equipeComplete->pays }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{--  VERSUS --}}
        <span class="col-1 d-flex align-items-center justify-content-center moutarde bg-dark rounded"><b>VS</b></span>
        {{-- Equipes non completes  --}}
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
                    @foreach ($equipesNonCompletes as $equipeNonComplete)
                        <tr>
                            <th scope='row'>{{ $equipeNonComplete->id }}</th>
                            <td>{{ $equipeNonComplete->nom }}</td>
                            <td>{{ $equipeNonComplete->pays }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Equipe europe vs horseurope --}}
    <div class="row mx-auto mt-3 pb-5">
        <div class="col-5 mt-3">
            <h4 class="purple">Les équipes d'Europe</h4>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>Nom</th>
                        <th scope='col'>Continent</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    @foreach ($equipesEurope as $equipeEurope)
                        <tr>
                            <th scope='row'>{{ $equipeEurope->id }}</th>
                            <td>{{ $equipeEurope->nom }}</td>
                            <td>{{ $equipeEurope->continent }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{--  VERSUS --}}
        <span class="col-1 d-flex align-items-center justify-content-center moutarde bg-dark rounded"><b>VS</b></span>
        {{-- Equipes hors europe  --}}
        <div class="col-5 mt-3">
            <h4 class="purple">Les équipes Hors-Europe</h4>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>Nom</th>
                        <th scope='col'>Continent</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    @foreach ($equipesHorsEurope as $equipeHorsEurope)
                        <tr>
                            <th scope='row'>{{ $equipeHorsEurope->id }}</th>
                            <td>{{ $equipeHorsEurope->nom }}</td>
                            <td>{{ $equipeHorsEurope->continent }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <hr> 

    {{-- SECTION LES JOUEURS --}}
    <h3 class="pt-5">LES JOUEURS</h4>
        {{-- Joueurs avec vs sans equipe --}}
        <div class="row mx-auto">
            <div class="col-5 mt-3">
                <h4 class="purple">Les joueurs avec équipe</h4>
                <table class='table'>
                    <thead>
                        <tr>
                            <th scope='col'>ID</th>
                            <th scope='col'>Nom</th>
                            <th scope='col'>Prénom</th>
                            <th scope='col'>Equipe</th>
                        </tr> {{-- all_tr_anchor --}}
                    </thead>
                    <tbody>
                        @foreach ($joueursEquipe as $joueurEquipe)
                            <tr>
                                <th scope='row'>{{ $joueurEquipe->id }}</th>
                                <td>{{ $joueurEquipe->nom }}</td>
                                <td>{{ $joueurEquipe->prenom }}</td>
                                <td>{{ $equipes[($joueurEquipe->equipe_id)-1]->nom }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{--  VERSUS --}}
            <span class="col-1 d-flex align-items-center justify-content-center moutarde bg-dark rounded"><b>VS</b></span>
            {{-- Joueurs sans equipes  --}}
            <div class="col-5 mt-3">
                <h4 class="purple">Les joueurs sans équipes</h4>
                <table class='table'>
                    <thead>
                        <tr>
                            <th scope='col'>ID</th>
                            <th scope='col'>Nom</th>
                            <th scope='col'>Prénom</th>
                            <th scope='col'>Equipe</th>
                        </tr> {{-- all_tr_anchor --}}
                    </thead>
                    <tbody>
                        @foreach ($joueursSansEquipe as $joueurSansEquipe)
                            <tr>
                                <th scope='row'>{{ $joueurSansEquipe->id }}</th>
                                <td>{{ $joueurSansEquipe->nom }}</td>
                                <td>{{ $joueurSansEquipe->prenom }}</td>
                                <td>{{ $equipes[($joueurEquipe->equipe_id)-1]->nom }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Joueurs femmes vs hommes --}}
        <div class="row mx-auto mt-3 pb-5">
            <div class="col-5 mt-3">
                <h4 class="purple">Les joueurs masculins</h4>
                <table class='table'>
                    <thead>
                        <tr>
                            <th scope='col'>ID</th>
                            <th scope='col'>Nom</th>
                            <th scope='col'>Prénom</th>
                            <th scope='col'>Genre</th>
                        </tr> {{-- all_tr_anchor --}}
                    </thead>
                    <tbody>
                        @foreach ($joueursMasculin as $joueurMasculin)
                            <tr>
                                <th scope='row'>{{ $joueurMasculin->id }}</th>
                                <td>{{ $joueurMasculin->nom }}</td>
                                <td>{{ $joueurMasculin->prenom }}</td>
                                <td>{{ $joueurMasculin->genre }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{--  VERSUS --}}
            <span class="col-1 d-flex align-items-center justify-content-center moutarde bg-dark rounded"><b>VS</b></span>
            {{-- Joueur feminine  --}}
            <div class="col-5 mt-3">
                <h4 class="purple">Les joueurs féminins</h4>
                <table class='table'>
                    <thead>
                        <tr>
                            <th scope='col'>ID</th>
                            <th scope='col'>Nom</th>
                            <th scope='col'>Prénom</th>
                            <th scope='col'>Genre</th>
                        </tr> {{-- all_tr_anchor --}}
                    </thead>
                    <tbody>
                        @foreach ($joueursFeminin as $joueurFeminin)
                            <tr>
                                <th scope='row'>{{ $joueurFeminin->id }}</th>
                                <td>{{ $joueurFeminin->nom }}</td>
                                <td>{{ $joueurFeminin->prenom }}</td>
                                <td>{{ $joueurFeminin->genre }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

         {{-- Joueurs representant leurs pays --}}
         <div class="row mx-auto mt-3 pb-5">
            <div class="col-12 mt-3">
                <h4 class="purple">Les joueurs qui représentent leurs pays d'origine</h4>
                <table class='table'>
                    <thead>
                        <tr>
                            <th scope='col'>ID</th>
                            <th scope='col'>Nom</th>
                            <th scope='col'>Prénom</th>
                            <th scope='col'>Origine</th>
                            <th scope='col'>Pays représenté</th>
                            <th scope='col'>Equipe</th>
                        </tr> {{-- all_tr_anchor --}}
                    </thead>
                    <tbody>
                        @foreach ($joueursRepresentants as $joueurRespresentant)
                            <tr>
                                <th scope='row'>{{ $joueurRespresentant->id }}</th>
                                <td>{{ $joueurRespresentant->nom }}</td>
                                <td>{{ $joueurRespresentant->prenom }}</td>
                                <td>{{ $joueurRespresentant->origine }}</td>
                                <td>{{ $equipes[($joueurRespresentant->equipe_id)-1]->pays }}</td>
                                <td>{{ $equipes[($joueurRespresentant->equipe_id)-1]->nom }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection