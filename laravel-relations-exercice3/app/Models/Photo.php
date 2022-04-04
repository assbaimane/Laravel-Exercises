<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'photo',
    ]; // model_anchor
     
    protected $table = 'photos';

    public function joueurs(){ //Joueur singulier 
        return $this->belongsTo(Joueur::class);
    }
}
