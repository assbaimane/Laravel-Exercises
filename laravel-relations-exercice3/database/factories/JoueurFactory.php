<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\joueur>
 */
class JoueurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    { //les roles sont les suivants : 1.avant, 2. arriere, 3. centraux, 4. remplaçant
        static $role = 1; //Commencer par le role numero 1 = nbavant
        static $b = 1; //permet de faire le compte de combien d'élements de chaque rôle on a 
        static $equipe = 1; //equipe 1 pour dire qu'on commence la création des joueurs par là, 
        // jusqu'à ce que tous les postes soient occupés

        if ($b > 2) { //ex: si on a deux avants
            $role++;  //on change de rôle : ex : on passe au rôle suivant : arrière
            if ($role === 4) {  // si on arrive à remplaçant ($role 4 = remplacant et donc valeur max = 3)
                $b = 1;         // en passant à $b, on peut ajouter un tour enplus (et donc avoir 3 joueur au lieu de 2 pour la catégorie)
            } else {            
                $b = 2;         
            }
        } else { //si on a pas encore 2 (ou 3 pour remplacant) joueur de la même catégorie on en rajoute
            $b++;
        }
        if ($role > 4) {   //si on a rempli tous les rôles d'une équipe
            $role = 1;      // on recommence avec le premier rôle 
            $b = 2;         //MYSTERE
            if($equipe) //Ici je dois vérifier que j'ai pas atteint le niveau max d'équipe
            $equipe++;      //on change d'équipe, on passe à la suivante parce que la première est full
        }

        return [
            "nom" => $this->faker->name,
            "prenom" => $this->faker->firstName,
            "age" => $this->faker->numberBetween(18, 40),
            "telephone" => $this->faker->phoneNumber,
            "email" => $this->faker->email,
            "genre" => $this->faker->randomElement(["M", "F", "X"]),
            "origine" => $this->faker->country,
            // "photo" => $this->faker->imageUrl(640, 480, "people"), -> voir photofacyory
            "role_id" => $role,
            "equipe_id" => $equipe,
        ];
    }
}
