<?php

namespace Database\Seeders;

use App\Models\LigneCommande;
use Illuminate\Database\Seeder;

class LigneCommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LigneCommande::factory()->count(5)->create();
    }
}
