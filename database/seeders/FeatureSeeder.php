<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert(
            [
                [
                    'image' => '',
                    'nama' => 'Quality',
                    'deskripsi' => 'Quality is demonstrated by providing the best service, choosing the best quality beans for customer satisfaction and supporting customer needs by providing the required quantity and quality.',
                ],
                [
                    'image' => '',
                    'nama' => 'Integrity',
                    'deskripsi' => 'Our main foundation stands by telling the truth, keeping promises and treating people fairly and with respect to maintain trust.',
                ],
                [
                    'image' => '',
                    'nama' => 'Commitment',
                    'deskripsi' => 'Committed to serving as a privilege given to customers in a professional, responsible, thorough and accurate manner.',
                ],
                [
                    'image' => '',
                    'nama' => 'Innovation',
                    'deskripsi' => 'Creating, designing and developing products and services that have high quality and attractiveness to become customer preferences as a form of our enthusiasm for innovation',
                ],
            ]
        );
    }
}
