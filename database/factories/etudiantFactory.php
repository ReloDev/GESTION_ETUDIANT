<?php

namespace Database\Factories;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class etudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Etudiant::class;
    public function definition()
    {
        return [
            "nom" => $this->faker->name,
            "prenom" => $this->faker->name,
            "matricule" => $this->faker->siren,
            "id_filiere" => $this->faker->siren,
        ];
    }
}
