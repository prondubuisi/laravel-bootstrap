<?php

namespace Database\Seeders;

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
        $this->call(ProteinSeeder::class);
        $this->call(SideSeeder::class);
        $this->call(AllergySeeder::class);
        $this->call(MealSeeder::class);
        
        
    }
}
