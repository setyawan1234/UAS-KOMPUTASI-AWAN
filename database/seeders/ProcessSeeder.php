<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('processes')->insert(
            [
                [
                    'nama' => 'Pick',
                    'judul' => 'Pick The Best Coffe Beans',
                    'deskripsi' => 'The first process in processing coffee is picking the best quality coffee cherries. The coffee cherries are not harvested all at once but are carried out in stages, including selective picking, semi-selective picking, simultaneous picking and picking up the fallen coffee cherries from the trees. In plain view, red coffee cherries tend to have a perfect level of ripeness.',
                    'image' => '',
                ],
                [
                    'nama' => 'Full Wash',
                    'judul' => 'Peel and Wash Coffe Beans',
                    'deskripsi' => 'This full wash method is a method of peeling coffee which is always in contact with water. Starting from selecting the quality of the cherries, separating the outer skin, to the fermentation process, everything comes into contact with water
                    .he coffee cherries are put into a tub filled with water to separate the coffee cherries. It will be seen that some are sinking and some are floating.',
                    'image' => '',
                ],
                [
                    'nama' => 'Drying',
                    'judul' => 'Dry Out the Coffe Beans',
                    'deskripsi' => 'With the drying process, the coffee beans produced must be dried first before being peeled. This is different from the wet method which peels the coffee beans first and then dries them. Dry coffee beans usually take about two weeks until very little water remains. It is necessary to pay attention to drying or drying in order to get the desired dry coffee beans.',
                    'image' => '',
                ],
            ]
        );
    }
}
