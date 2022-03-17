<?php

namespace Database\Seeders;

use App\Models\RealState;
use Illuminate\Database\Seeder;

class RealStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RealState::factory()->count(30)->create();
    }
}
