<?php
namespace Database\Seeders;

use App\Models\Kelas;
use App\Models\TahunAjaran;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mendapatkan tahun ajaran aktif
        $tahunAjaranAktif = TahunAjaran::where('is_active', true)->first();

        // Tambahkan kelas 1A jika belum ada
        $kelas1A = Kelas::where('tahun_ajaran_id', $tahunAjaranAktif->id)->where('name', '1A')->first();
        if (!$kelas1A) {
            $kelas1A = Kelas::create([
                'name' => '1A',
                'tahun_ajaran_id' => $tahunAjaranAktif->id,
            ]);
        }

        // Tambahkan admin
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('rahasia'),
            'role' => 'admin',
        ]);

        // Tambahkan siswa
        User::create([
            'name' => 'Siswa User 1',
            'email' => 'siswa1@gmail.com',
            'password' => Hash::make('rahasia'),
            'role' => 'siswa',
            'kelas_id' => $kelas1A->id,
            'tahun_ajaran_id' => $tahunAjaranAktif->id,
        ]);

        User::create([
            'name' => 'Siswa User 2',
            'email' => 'siswa2@gmail.com',
            'password' => Hash::make('rahasia'),
            'role' => 'siswa',
            'kelas_id' => $kelas1A->id,
            'tahun_ajaran_id' => $tahunAjaranAktif->id,
        ]);

    }
}
