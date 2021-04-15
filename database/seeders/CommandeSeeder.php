<?php

namespace Database\Seeders;

use App\Commande;
use Illuminate\Database\Seeder;

class CommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Commande::factory()->count(5)->create();
    }
}
