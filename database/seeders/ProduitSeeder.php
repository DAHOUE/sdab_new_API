<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Produit;
=======
use App\Models\Produit;
>>>>>>> 48c362d74416c4731deb8d73c8ca0b4a025e85be
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produit::factory()->count(5)->create();
    }
}
