<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Commune::factory()->times(10)->create();
    }
}
