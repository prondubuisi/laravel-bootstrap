<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Allergy;

class AllergySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allergies = [
            ['name' => 'Nut Allergy'],
            ['name' => 'ShellFish Allergy'],
            ['name' => 'SeaFood Allergy'],
        ];

        foreach ($allergies as $allergy) {
            Allergy::firstOrCreate($allergy);
        }
    }
}
