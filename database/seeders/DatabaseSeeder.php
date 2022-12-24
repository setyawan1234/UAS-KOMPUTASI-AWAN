<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('agrofarm')
        ]);
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            PengambilanSeeder::class,
            MessageSeeder::class,
            ProcessSeeder::class,
            AboutSeeder::class,
            FeatureSeeder::class,
            DetailGradeSeeder::class,
            // PenjualanSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
