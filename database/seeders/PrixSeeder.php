<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Prix;
=======
use App\Models\Prix;
>>>>>>> 48c362d74416c4731deb8d73c8ca0b4a025e85be
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
