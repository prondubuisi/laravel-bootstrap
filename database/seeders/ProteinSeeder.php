<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Protein;

class ProteinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proteins = [
            ['name' => 'Goat Meat'],
            ['name' => 'Beaf'],
            ['name' => 'Pork Meat'],
            ['name' => 'Cooked Fish'],
            ['name' => 'Fried Fish'],
            ['name' => 'Turkey'],
            ['name' => 'Chicken Breast'],
            ['name' => 'Chicken Laps'],
            ['name' => 'Chicken Wings'],
            ['name' => 'Eggs'],
            ['name' => 'Almonds'],
            ['name' => 'Oats'],
            ['name' => 'Cottage Cheese'],
            ['name' => 'Greek Yogurt'],
            ['name' => 'Milk'],
            ['name' => 'Broccoli'],
            ['name' => 'Lean Beef'],
            ['name' => 'Tuna'],
            ['name' => 'Shrimp'],
            ['name' => 'Peanuts'],
        ];

        foreach ($proteins as $protein) {
            Protein::firstOrCreate($protein);
        }

        
    }
}
