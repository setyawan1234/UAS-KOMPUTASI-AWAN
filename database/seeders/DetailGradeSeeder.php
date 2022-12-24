<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_grades')->insert(
            [
                // roasted robusta
                [
                    'categories_id' => '1',
                    'products_id' => 1,
                    'grade' => 'Grade 1',
                    'screen' => '16, 17, 18',
                    'above' => '90%',
                    'defect' => '11%',
                    'imperfect' => '8%',
                    'process' => 'Natural Full Washed',
                    'variety' => 'Mix',
                    'maisture' => '13%',
                ],
                [
                    'categories_id' => '1',
                    'products_id' => 1,
                    'grade' => 'Grade 2',
                    'screen' => '16, 17, 18',
                    'above' => '90%',
                    'defect' => '12% - 25%',
                    'imperfect' => '15%',
                    'process' => 'Natural Full Washed',
                    'variety' => 'Mix',
                    'maisture' => '13%',
                ],
                [
                    'categories_id' => '1',
                    'products_id' => 1,
                    'grade' => 'Grade 3',
                    'screen' => '16, 17, 18',
                    'above' => '90%',
                    'defect' => '26% - 44%',
                    'imperfect' => '15%',
                    'process' => 'Natural Full Washed',
                    'variety' => 'Mix',
                    'maisture' => '13,5%',
                ],
                [
                    'categories_id' => '1',
                    'products_id' => 1,
                    'grade' => 'Komersil',
                    'screen' => '16, 17, 18',
                    'above' => '85%',
                    'defect' => '45% - 60%',
                    'imperfect' => '15%',
                    'process' => 'Natural Full Washed',
                    'variety' => 'Mix',
                    'maisture' => '13,5%',
                ],
                // robusta coffee bean
                [
                    'categories_id' => '1',
                    'products_id' => 4,
                    'grade' => 'Grade 1',
                    'screen' => '16, 17, 18',
                    'above' => '90%',
                    'defect' => '11%',
                    'imperfect' => '8%',
                    'process' => 'Natural Full Washed',
                    'variety' => 'Mix',
                    'maisture' => '13%',
                ],
                [
                    'categories_id' => '1',
                    'products_id' => 4,
                    'grade' => 'Grade 2',
                    'screen' => '16, 17, 18',
                    'above' => '90%',
                    'defect' => '12% - 25%',
                    'imperfect' => '15%',
                    'process' => 'Natural Full Washed',
                    'variety' => 'Mix',
                    'maisture' => '13%',
                ],
                [
                    'categories_id' => '1',
                    'products_id' => 4,
                    'grade' => 'Grade 3',
                    'screen' => '16, 17, 18',
                    'above' => '90%',
                    'defect' => '26% - 44%',
                    'imperfect' => '15%',
                    'process' => 'Natural Full Washed',
                    'variety' => 'Mix',
                    'maisture' => '13,5%',
                ],
                [
                    'categories_id' => '1',
                    'products_id' => 4,
                    'grade' => 'Komersil',
                    'screen' => '16, 17, 18',
                    'above' => '85%',
                    'defect' => '45% - 60%',
                    'imperfect' => '15%',
                    'process' => 'Natural Full Washed',
                    'variety' => 'Mix',
                    'maisture' => '13,5%',
                ],
                // Robusta Coffe Powder
                [
                    'categories_id' => '1',
                    'products_id' => 5,
                    'grade' => 'Grade 1',
                    'screen' => '16, 17, 18',
                    'above' => '90%',
                    'defect' => '11%',
                    'imperfect' => '8%',
                    'process' => 'Natural Full Washed',
                    'variety' => 'Mix',
                    'maisture' => '13%',
                ],
                [
                    'categories_id' => '1',
                    'products_id' => 5,
                    'grade' => 'Grade 2',
                    'screen' => '16, 17, 18',
                    'above' => '90%',
                    'defect' => '12% - 25%',
                    'imperfect' => '15%',
                    'process' => 'Natural Full Washed',
                    'variety' => 'Mix',
                    'maisture' => '13%',
                ],
                [
                    'categories_id' => '1',
                    'products_id' => 5,
                    'grade' => 'Grade 3',
                    'screen' => '16, 17, 18',
                    'above' => '90%',
                    'defect' => '26% - 44%',
                    'imperfect' => '15%',
                    'process' => 'Natural Full Washed',
                    'variety' => 'Mix',
                    'maisture' => '13,5%',
                ],
                [
                    'categories_id' => '1',
                    'products_id' => 5,
                    'grade' => 'Komersil',
                    'screen' => '16, 17, 18',
                    'above' => '85%',
                    'defect' => '45% - 60%',
                    'imperfect' => '15%',
                    'process' => 'Natural Full Washed',
                    'variety' => 'Mix',
                    'maisture' => '13,5%',
                ],
                // Roasted Arabica
                [
                    'categories_id' => '2',
                    'products_id' => 2,
                    'grade' => 'Grade 1',
                    'screen' => '15, 16, 17',
                    'above' => '90%',
                    'defect' => '11%',
                    'imperfect' => '8%',
                    'process' => 'Natural Full Washed',
                    'variety' => 'Mix',
                    'maisture' => '13%',
                ],
                [
                    'categories_id' => '2',
                    'products_id' => 2,
                    'grade' => 'Speciality Grade',
                    'screen' => '5%',
                    'above' => '-',
                    'defect' => '3%',
                    'imperfect' => '-',
                    'process' => 'Natural Full Washed',
                    'variety' => 'Mix',
                    'maisture' => '11% - 12%',
                ],
                // Arabica Coffee Bean
                [
                    'categories_id' => '2',
                    'products_id' => 3,
                    'grade' => 'Grade 1',
                    'screen' => '15, 16, 17',
                    'above' => '90%',
                    'defect' => '11%',
                    'imperfect' => '8%',
                    'process' => 'Natural Full Washed',
                    'variety' => 'Mix',
                    'maisture' => '13%',
                ],
                [
                    'categories_id' => '2',
                    'products_id' => 3,
                    'grade' => 'Speciality Grade',
                    'screen' => '5%',
                    'above' => '-',
                    'defect' => '3%',
                    'imperfect' => '-',
                    'process' => 'Natural Full Washed',
                    'variety' => 'Mix',
                    'maisture' => '11% - 12%',
                ],
            ]
        );
    }
}
