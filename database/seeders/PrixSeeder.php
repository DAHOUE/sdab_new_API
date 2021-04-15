<?php

namespace Database\Seeders;

use App\Prix;
use Illuminate\Database\Seeder;

class PrixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prix::factory()->count(5)->create();
    }
}
