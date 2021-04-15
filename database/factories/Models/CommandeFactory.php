<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Client;
use App\Models\Commande;

class CommandeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Commande::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'client_id' => Client::factory(),
            'montant_total' => $this->faker->numberBetween(-10000, 10000),
            'mode_retrait' => $this->faker->word,
            'date_livraison_souhaite' => $this->faker->date(),
        ];
    }
}
