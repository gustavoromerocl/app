<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VoterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Voter::factory()->times(10)->create();
    }
}
