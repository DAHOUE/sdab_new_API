<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Exploitation;
use App\Models\TicheTechnique;

class TicheTechniqueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TicheTechnique::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ethrellage' => $this->faker->word,
            'mode_plantation' => $this->faker->word,
            'densite' => $this->faker->word,
            'date_tif' => $this->faker->date(),
            'exploitation_id' => Exploitation::factory(),
            'marqueur' => $this->faker->word,
            'quantite_a_produire' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
