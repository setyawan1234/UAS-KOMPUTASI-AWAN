<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengambilanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengambilans')->insert(
            [
                [
                    'nama_pengambil' => 'Supplier',
                    'category_id' => 1,
                    'jumlah' => 20,
                    'lokasi' => 'Jl. Villa Bukit Tidar No.A4-294, Merjosari, Kecamatan Lowokwaru, Kota Malang 65144',
                    'tanggal_ambil' => '2022-10-20',
                    'status' => 1
                ],
                [
                    'nama_pengambil' => 'Supplier',
                    'category_id' => 2,
                    'jumlah' => 15,
                    'lokasi' => 'Jl. Villa Bukit Tidar No.A4-294, Merjosari, Kecamatan Lowokwaru, Kota Malang 65144',
                    'tanggal_ambil' => '2022-10-12',
                    'status' => 1
                ],
                [
                    'nama_pengambil' => 'Supplier',
                    'category_id' => 1,
                    'jumlah' => 22,
                    'lokasi' => 'Jl. Villa Bukit Tidar No.A4-294, Merjosari, Kecamatan Lowokwaru, Kota Malang 65144',
                    'tanggal_ambil' => '2022-10-19',
                    'status' => 1
                ],
                [
                    'nama_pengambil' => 'Supplier',
                    'category_id' => 2,
                    'jumlah' => 23,
                    'lokasi' => 'Jl. Villa Bukit Tidar No.A4-294, Merjosari, Kecamatan Lowokwaru, Kota Malang 65144',
                    'tanggal_ambil' => '2022-10-26',
                    'status' => 1
                ],
            ]
        );
    }
}
