<?php

namespace Database\Seeders;

use App\Marche;
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
