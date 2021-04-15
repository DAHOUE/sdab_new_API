<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Marche;
=======
use App\Models\Marche;
>>>>>>> 48c362d74416c4731deb8d73c8ca0b4a025e85be
use Illuminate\Database\Seeder;

class MarcheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marche::factory()->count(5)->create();
    }
}
