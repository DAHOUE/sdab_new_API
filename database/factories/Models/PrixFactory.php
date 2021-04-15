<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Marche;
use App\Models\Prix;
use App\Models\Produit;

class PrixFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Prix::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_debut' => $this->faker->date(),
            'date_fin' => $this->faker->date(),
            'statut' => $this->faker->word,
            'prix' => $this->faker->numberBetween(-10000, 10000),
            'produit_id' => Produit::factory(),
            'marche_id' => Marche::factory(),
        ];
    }
}
