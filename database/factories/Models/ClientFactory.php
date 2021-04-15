<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
<<<<<<< HEAD
use App\Models\client;
=======
use App\Models\Client;
>>>>>>> 48c362d74416c4731deb8d73c8ca0b4a025e85be

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->word,
            'prenom' => $this->faker->word,
            'contact' => $this->faker->word,
            'adresse' => $this->faker->word,
        ];
    }
}
