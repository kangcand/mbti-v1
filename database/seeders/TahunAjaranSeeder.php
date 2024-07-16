<?php

namespace Database\Seeders;

use App\Models\TahunAjaran;
use Illuminate\Database\Seeder;

class TahunAjaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TahunAjaran::create([
            'tahun' => '2023/2024',
            'is_active' => true,
        ]);

        TahunAjaran::create([
            'tahun' => '2024/2025',
            'is_active' => true,
        ]);

    }
}
