<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
<<<<<<< HEAD
use App\Models\produit;
=======
use App\Models\Produit;
>>>>>>> 48c362d74416c4731deb8d73c8ca0b4a025e85be

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
