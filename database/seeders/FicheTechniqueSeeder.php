<?php

namespace Database\Seeders;

use App\FicheTechnique;
use Illuminate\Database\Seeder;

class FicheTechniqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FicheTechnique::factory()->count(5)->create();
    }
}
