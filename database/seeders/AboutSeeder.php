<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert(
            [
                [
                    'judul' => 'PT Agrofarm Globalindo Investama',
                    'head' => 'Indonesia has rich natural products, making us strive to provide the best Indonesian natural products, one of which is Indonesian coffee which has unique characteristics and quality.',
                    'intro1' => 'Agro Coffee is a supplier of Arabica and Robusta Java coffee beans from Mount Semeru, Mount Arjuna, Mount Kawi from Indonesia. In searching for the best types of coffee at the Java level at an altitude of 1200 - 1300 masl, we select the best coffee by carrying out the process of planting, picking and harvesting in the best way to produce quality results to offer to buyers.',
                    'intro2' => 'Our coffee is grown on the slopes of the best coffee-producing mountains in Malang, East Java. thus producing high-quality coffee plants in each region that present a distinct taste. These differences are based on characteristics based on the characteristics of other plants that grow around the coffee plant.',
                    'intro3' => 'We provide various kinds of Arabica and Robusta coffee beans. We also provide the best quality Green Bean and Roasted Bean for your needs.
                    Therefore we introduce the taste of the heart of the archipelago as a result of the selection of experienced farmers that we will offer to buyers in small to large supply capacities as well as for local and export needs',
                    'image1' => '',
                    'image2' => '',
                ],
            ]
        );
    }
}
