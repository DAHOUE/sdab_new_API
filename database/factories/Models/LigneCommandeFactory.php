<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Commande;
use App\Models\LigneCommande;
use App\Models\Produit;

class LigneCommandeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LigneCommande::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'commande_id' => Commande::factory(),
            'produit_id' => Produit::factory(),
            'quantite_en_stock' => $this->faker->randomFloat(0, 0, 9999999999.),
            'categorie' => $this->faker->word,
        ];
    }
}
