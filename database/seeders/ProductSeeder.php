<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'nama' => 'Roasted Robusta',
                    'deskripsi' => 'Coffee roasting is the process of roasting or roasting coffee beans that are still raw.  Thats right, to get the distinctive taste of coffee, coffee beans need to go through several processes, one of which is the roasting process first.',
                    'status' => '1',
                    'categories_id' => 1,
                ],
                [
                    'nama' => 'Roasted Arabica',
                    'deskripsi' => 'Roasting Coffee is cooking coffee, basically roasting is the process of removing the water in the coffee, drying and developing the beans, reducing the weight to give the coffee its aroma.  The function of the roast is to bring out the aroma and taste of coffee.  Without roasting the coffee beans, the aroma is like most grains.',
                    'status' => '1',
                    'categories_id' => 2,
                ],
                [
                    'nama' => 'Arabica Coffee Bean',
                    'deskripsi' => 'Arabica is a wet processed coffee that was first introduced by the Dutch to Indonesia nearly three centuries ago.  Arabica coffee beans have a tendency to taste sweet, fruity, floral, chocolaty, and have a low acidity level.  Arabica coffee has small and thick leaves and is grown at an altitude of 1000-1500 masl, Robusta coffee has broad and thin leaves and is grown at an altitude of 40-900 meters above sea level',
                    'status' => '2',
                    'categories_id' => 2,
                ],
                [
                    'nama' => 'Robusta Coffee Bean',
                    'deskripsi' => 'Robusta coffee is the second most popular coffee in the world, Robust is the origin of the name of one type of coffee, namely Robusta coffee.  In English, robust means "strong".  Robusta coffee beans will produce coffee with a more concentrated and stronger taste.  This type of coffee grows well at an altitude of 400-700 meters above sea level',
                    'status' => '2',
                    'categories_id' => 1,
                ],
                [
                    'nama' => 'Robusta Coffe Powder',
                    'deskripsi' => 'Ground coffee is coffee beans that have been processed and finely ground in the form of small granules so that they are easy to brew with hot water and consume.  The process for making ground coffee, from ripe coffee cherries to coffee powder in certain packages',
                    'status' => '3',
                    'categories_id' => 1,
                ],
            ]
        );
    }
}
