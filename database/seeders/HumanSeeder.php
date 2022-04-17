<?php

namespace Database\Seeders;

use Database\Factories\HumanFactory;
use Illuminate\Database\Seeder;
use App\Models\Human;
class HumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Human::factory(100)->create();
    }
}
