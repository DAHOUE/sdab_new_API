<?php

namespace Database\Seeders;

use App\Fiche_technique;
use Illuminate\Database\Seeder;

class Fiche_techniqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fiche_technique::factory()->count(5)->create();
    }
}
