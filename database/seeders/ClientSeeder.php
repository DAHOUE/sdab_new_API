<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Client;
=======
use App\Models\Client;
>>>>>>> 48c362d74416c4731deb8d73c8ca0b4a025e85be
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::factory()->count(5)->create();
    }
}
