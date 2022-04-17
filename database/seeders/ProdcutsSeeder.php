<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProdcutsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(100)->create();
    }
}
