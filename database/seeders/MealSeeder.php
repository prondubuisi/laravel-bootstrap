<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meal;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $meals = [
            ['name' => 'Fried Rice/Chicken ', 'side_ids' => [1, 20],'allergy_ids' => []],
            ['name' => 'Spaghetti Bolognese', 'side_ids' => [2, 19],'allergy_ids' => []],
            ['name' => 'Afang Soup/Semovita ', 'side_ids' => [3, 18 ],'allergy_ids' => [1, 3]],
            ['name' => 'Coconut Rice', 'side_ids' => [4, 17],'allergy_ids' => [1]],
            ['name' => 'Fisherman Soup', 'side_ids' => [5, 16],'allergy_ids' => [3]],
            ['name' => 'Spaghetti', 'side_ids' => [6, 15],'allergy_ids' => []],
            ['name' => 'Jollof Rice', 'side_ids' => [7, 14],'allergy_ids' => []],
            ['name' => 'Rice/Curry Sauce', 'side_ids' => [8, 13],'allergy_ids' => []],
            ['name' => 'Oha Soup/Fufu', 'side_ids' => [9, 12],'allergy_ids' => []],
            ['name' => 'Banga Stew/Rice', 'side_ids' => [10, 11],'allergy_ids' => [2, 3]],
            ['name' => 'Efo Riro/Fufu', 'side_ids' => [2, 14],'allergy_ids' => []],
            ['name' => 'Native Rice', 'side_ids' => [3, 13],'allergy_ids' => []],
            ['name' => 'Egusi soup/Garri', 'side_ids' => [5, 12],'allergy_ids' => [2]],
            ['name' => 'Jollof Beans', 'side_ids' => [1, 18],'allergy_ids' => [3]],
            ['name' => 'Bitter Leaf Soup', 'side_ids' => [9, 17],'allergy_ids' => [1]],
            ['name' => 'Achi Soup', 'side_ids' => [10, 16],'allergy_ids' => [1, 2, 3]],
            ['name' => 'Fried Rice', 'side_ids' => [1, 16],'allergy_ids' => []],
            ['name' => 'White yam', 'side_ids' => [5, 11],'allergy_ids' => []],
            ['name' => 'White Beans/Stew', 'side_ids' => [7, 13],'allergy_ids' => []],
            ['name' => 'Ukazi Soup', 'side_ids' => [4, 12],'allergy_ids' => [1, 3]],
            ['name' => 'Basmati Rice', 'side_ids' => [1, 17],'allergy_ids' => []],
            ['name' => 'Moi Moi/ Akamu', 'side_ids' => [8, 20],'allergy_ids' => [3]],
            ['name' => 'Fried Akara & Pap', 'side_ids' => [2, 17],'allergy_ids' => []],
            ['name' => 'Fried Plantain & Potatoes', 'side_ids' => [6, 19],'allergy_ids' => []],
            ['name' => 'Edikaikong Soup', 'side_ids' => [8, 13],'allergy_ids' => [2, 3]],
            ['name' => 'Fish Stew & Dodo', 'side_ids' => [10, 20],'allergy_ids' => []],
            ['name' => 'Bread Sandwich & Beverage', 'side_ids' => [5, 14],'allergy_ids' => []],
            ['name' => 'Noodles & Egg', 'side_ids' => [8, 17],'allergy_ids' => [1, 2, 3]],
            ['name' => 'Moi Moi & Custard', 'side_ids' => [4, 13],'allergy_ids' => []],
            ['name' => 'Cereal', 'side_ids' => [6, 11],'allergy_ids' => []],
            ['name' => 'Okpa', 'side_ids' => [9, 11],'allergy_ids' => [1, 3]],
            ['name' => 'Ewa Agoyin', 'side_ids' => [1, 18],'allergy_ids' => []],
            ['name' => 'Hausa Koko and Koose', 'side_ids' => [6, 13],'allergy_ids' => []],
            ['name' => ' Fried Plantain and Yam', 'side_ids' => [8, 13],'allergy_ids' => [3]],
            ['name' => 'Pancake', 'side_ids' => [8, 12],'allergy_ids' => []],
            ['name' => 'Okro Soup', 'side_ids' => [2, 13],'allergy_ids' => [2]],
            ['name' => 'Yam Pottage', 'side_ids' => [6, 15],'allergy_ids' => []],
            ['name' => 'Cattfish Pepper Soup', 'side_ids' => [9, 14],'allergy_ids' => [1, 3]],
            ['name' => 'Jollof Spaghetti', 'side_ids' => [8, 18],'allergy_ids' => []],
            ['name' => 'Banga Soup', 'side_ids' => [6, 13],'allergy_ids' => [3]],
            ['name' => 'Ekpang Nkukwo', 'side_ids' => [8, 17],'allergy_ids' => []],
            ['name' => 'Ikokore', 'side_ids' => [9, 15],'allergy_ids' => [1, 3]],
            ['name' => ' Tuwo Shinkafa & Tuwo Masara', 'side_ids' => [4, 12],'allergy_ids' => [2, 3]],
            ['name' => 'Nkwobi', 'side_ids' => [7, 11],'allergy_ids' => []],
            ['name' => 'White Soup', 'side_ids' => [8, 17],'allergy_ids' => []],
            ['name' => 'Ofe Nsala', 'side_ids' => [9, 12],'allergy_ids' => [1]],
            ['name' => 'Ogbono Soup', 'side_ids' => [8, 15],'allergy_ids' => [2]],
            ['name' => 'Afang Soup', 'side_ids' => [4, 13],'allergy_ids' => [3]],
            ['name' => 'Ofe Onugbu', 'side_ids' => [9, 17],'allergy_ids' => [1, 2]],
            ['name' => 'Gbegiri Soup', 'side_ids' => [8, 15],'allergy_ids' => []],
            ['name' => 'Miyan Kuka', 'side_ids' => [6, 11],'allergy_ids' => []],
            ['name' => 'Miyan Yakuwa', 'side_ids' => [9, 13],'allergy_ids' => []],
            ['name' => 'Miyan Taushe', 'side_ids' => [1, 17],'allergy_ids' => [2,3]],
            ['name' => 'ripe Plantain Porridge', 'side_ids' => [8, 15],'allergy_ids' => []],
            ['name' => 'Ojojo', 'side_ids' => [1, 17],'allergy_ids' => []],
            ['name' => 'Keke Fieye', 'side_ids' => [6,16],'allergy_ids' => []],
            ['name' => 'Roasted Plantain and Pepper Sauce', 'side_ids' => [3, 14],'allergy_ids' => [1,3]],
            ['name' => 'Ofada Rice', 'side_ids' => [5, 16],'allergy_ids' => []],
            ['name' => 'Groundnut Soup', 'side_ids' => [8, 12],'allergy_ids' => [1]],
            ['name' => 'Amala and Ewedu', 'side_ids' => [4, 19],'allergy_ids' => []],
        ];

        foreach ($meals as $meal) {
            Meal::firstOrCreate($meal);
        }

    }
}
