<?php

namespace Database\Seeders;

use App\Models\Kelas;
use App\Models\TahunAjaran;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tahunAjaranAktif = TahunAjaran::where('is_active', true)->first();

        Kelas::create([
            'name' => '1A',
            'tahun_ajaran_id' => $tahunAjaranAktif->id,
        ]);

        Kelas::create([
            'name' => '1B',
            'tahun_ajaran_id' => $tahunAjaranAktif->id,
        ]);

    }
}
