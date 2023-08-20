<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Votante;

class VotantesTableSeeder extends Seeder
{
    public function run()
    {
        Votante::factory(20)->create();
    }
}
