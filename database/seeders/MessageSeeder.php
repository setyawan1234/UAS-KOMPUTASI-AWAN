<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert(
            [
                [
                    'nama' => 'Dani',
                    'email' => 'dani@gmail.com',
                    'subjek' => 'Kopi robusta',
                    'pesan' => 'kopinya cukup berkualitas semoga tetap menjual dengan kualitas yang lebih baik',
                ],
                [
                    'nama' => 'rizki',
                    'email' => 'rizki@gmail.com',
                    'subjek' => 'Kopi arabica',
                    'pesan' => 'kopinya cukup berkualitas semoga tetap menjual dengan kualitas yang lebih baik',
                ],
            ]
        );
    }
}
