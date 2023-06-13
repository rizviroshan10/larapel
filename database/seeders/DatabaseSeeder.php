<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach(range(1,99) as $number) {
            Mahasiswa::create([
                'npm' => '21252500'. $number,
                'nama' => fake()->name(),
                'tanggal' => fake()->date($format = 'Y-m-d', $max = 'now'),
                'kota_lahir' => fake()->state(),
                'foto' => '2125250096.jpg',
                'prodi_id' => '993bf06c-5d29-407a-95c0-e8f33da12cb5',



            ]);
        }

        $this->call([
           FakultasSeeder::class 
        ]);
    }
}
