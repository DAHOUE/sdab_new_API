<?php

namespace Database\Seeders;

use App\Ligne_commande;
use Illuminate\Database\Seeder;

class Ligne_commandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ligne_commande::factory()->count(5)->create();
    }
}
