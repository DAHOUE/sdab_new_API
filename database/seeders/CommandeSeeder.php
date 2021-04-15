<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Commande;
=======
use App\Models\Commande;
>>>>>>> 48c362d74416c4731deb8d73c8ca0b4a025e85be
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
