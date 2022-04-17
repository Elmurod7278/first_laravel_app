<?php

namespace Database\Seeders;

use App\Models\Banan;
use Illuminate\Database\Seeder;

class BananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banan::factory(100)->create();
    }
}
