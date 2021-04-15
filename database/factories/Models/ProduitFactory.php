<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\produit;

class ProduitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'designation' => $this->faker->word,
            'type' => $this->faker->word,
            'quantite_en_stock' => $this->faker->numberBetween(-10000, 10000),
            'categorie' => $this->faker->word,
        ];
    }
}
