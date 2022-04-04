<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\EquipeController;
use App\Models\Equipe;
use App\Models\Joueur;

Route::get('/', function () {
    $equipes = Equipe::all();
    $joueurs = Joueur::all();
    $equipesCompletes = $equipes->where('nbavant','=',2 AND 'nbarriere','=',2 AND'nbcentraux','=',2 AND'nbremplacant','=',3);
    $equipesNonCompletes = $equipes->where('nbavant','!=',2 OR 'nbarriere','!=',2 OR'nbcentraux','!=',2 OR'nbremplacant','!=',3);
    $equipesEurope = $equipes->where('continent','=','Europe');
    $equipesHorsEurope = $equipes->where('continent','=','Hors-Europe');
    $joueursEquipe = $joueurs->where('equipe_id','!=',null);
    $joueursSansEquipe = $joueurs->where('equipe_id','=',null);
    $joueursMasculin = $joueurs->where('genre','=','M');
    $joueursFeminin = $joueurs->where('genre','=','F');
    $joueursRepresentants = [];
    // Voir les jointures, array intersect et array diff pour l'exo ci dessous
    foreach ($joueurs as $joueur){
        foreach($equipes as $equipe){
            if(($equipe->id) == ($joueur->equipe_id)){
                if(($equipe->pays) == ($joueur->origine)){
                    array_push($joueursRepresentants, $joueur);
                }
            }
            else{}
        }
    }
    return view('welcome',compact('equipes','equipesCompletes','equipesNonCompletes','equipesEurope','equipesHorsEurope','joueursEquipe','joueursSansEquipe','joueursMasculin','joueursFeminin','joueursRepresentants'));
});
Route::resource('/back/equipe', EquipeController::class);
Route::resource('/back/joueur', JoueurController::class);
Route::resource('/back/role', RoleController::class);
Route::resource('/back/photo', PhotoController::class);