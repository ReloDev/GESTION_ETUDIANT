<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 1 ; $i <= 100 ; $i++){
            Etudiant::create([
                'nom' => $faker->firstname,
                'prenom'  => $faker->lastname,
                'matricule' => $faker->numberBetween($min = 5001, $max = 115482),
                'id_filiere' => $faker->numberBetween($min = 1, $max = 7),
            ]);
        }
    }
}
