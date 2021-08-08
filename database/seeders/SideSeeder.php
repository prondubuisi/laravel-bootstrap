<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Side;


class SideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appetizers = [
            ['name' => 'Fruit Salad', 'type' => 'appetizer'],
            ['name' => 'Cheesecake', 'type' => 'appetizer'],
            ['name' => 'Fresh Apple Juice', 'type' => 'appetizer'],
            ['name' => 'Apple Pie', 'type' => 'appetizer'],
            ['name' => 'Chicken Pie', 'type' => 'appetizer'],
            ['name' => 'Glazed Doughnuts', 'type' => 'appetizer'],
            ['name' => 'Red Velvet Cake Slices', 'type' => 'appetizer'],
            ['name' => 'Banana/watermelon Smoothie', 'type' => 'appetizer'],
            ['name' => 'Banana Bread', 'type' => 'appetizer'],
            ['name' => 'Fruit Splash', 'type' => 'appetizer'],
            
        ];

        foreach ($appetizers as $appetizer) {
            Side::firstOrCreate($appetizer);
        }

        $desserts = [
            ['name' => 'Velvety Chocolate Pots', 'type' => 'dessert'],
            ['name' => 'Crème Brulee', 'type' => 'dessert'],
            ['name' => 'Fresh Fruit Pavlova', 'type' => 'dessert'],
            ['name' => 'Individual Chocolate & Lime Cheese cake', 'type' => 'dessert'],
            ['name' => 'Tarte aux Citroen', 'type' => 'dessert'],
            ['name' => 'Rhubarb & Apple Crumble', 'type' => 'dessert'],
            ['name' => 'Chocolate Brownie with Red Cherries and Cream', 'type' => 'dessert'],
            ['name' => 'Roasted strawberry crumble', 'type' => 'dessert'],
            ['name' => 'Apple cinnamon custard cake', 'type' => 'dessert'],
            ['name' => 'Honey Cheesecake', 'type' => 'dessert'],
        ];

        foreach ($desserts as $dessert) {
            Side::firstOrCreate($dessert);
        }
    }
}
