<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
//            HumanSeeder::class,
//            CompanySeeder::class,
//            BananSeeder::class,
//            NewsSeeder::class,
            ProdcutsSeeder::class
        ]);

    }
}
