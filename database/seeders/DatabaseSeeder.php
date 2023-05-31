<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\SubKriteria;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('admin'),
        // ]);

        Alternatif::create([
            'kode' => 'A1',
            'nama_alternatif' => 'Anggun',
        ]);

        Alternatif::create([
            'kode' => 'A2',
            'nama_alternatif' => 'Melinda',
        ]);

        Alternatif::create([
            'kode' => 'A3',
            'nama_alternatif' => 'Aisyah',
        ]);
        // a1
        Kriteria::create([
            'nama_kriteria' => 'Prestasi',
            'bobot' => 10,
            'jenis_kriteria' => 'Benefit'
        ]);

        SubKriteria::create([
            'kriteria_id' => '1',
            'nama_sub' => '1 - 2',
            'nilai' => 1,
        ]);

        SubKriteria::create([
            'kriteria_id' => '1',
            'nama_sub' => '3 - 4',
            'nilai' => 4,
        ]);

        Kriteria::create([
            'nama_kriteria' => 'Etika',
            'bobot' => 20,
            'jenis_kriteria' => 'Benefit'
        ]);

        SubKriteria::create([
            'kriteria_id' => '2',
            'nama_sub' => 'Jelek',
            'nilai' => 2,
        ]);

        SubKriteria::create([
            'kriteria_id' => '2',
            'nama_sub' => 'Baik',
            'nilai' => 5,
        ]);

        Kriteria::create([
            'nama_kriteria' => 'Prestasi Non Akademik',
            'bobot' => 20,
            'jenis_kriteria' => 'Benefit'
        ]);

        SubKriteria::create([
            'kriteria_id' => '3',
            'nama_sub' => 'Sedikit',
            'nilai' => 2,
        ]);

        SubKriteria::create([
            'kriteria_id' => '3',
            'nama_sub' => 'Banyak',
            'nilai' => 6,
        ]);

        Kriteria::create([
            'nama_kriteria' => 'Jumlah Sertifikat Keahlian',
            'bobot' => 10,
            'jenis_kriteria' => 'Benefit'
        ]);

        SubKriteria::create([
            'kriteria_id' => '4',
            'nama_sub' => 'Tidak Ada',
            'nilai' => 1,
        ]);

        SubKriteria::create([
            'kriteria_id' => '4',
            'nama_sub' => 'Ada',
            'nilai' => 3,
        ]);

        Kriteria::create([
            'nama_kriteria' => 'Aktif Organisasi',
            'bobot' => 25,
            'jenis_kriteria' => 'Benefit'
        ]);

        SubKriteria::create([
            'kriteria_id' => '5',
            'nama_sub' => 'Tidak',
            'nilai' => 1,
        ]);

        SubKriteria::create([
            'kriteria_id' => '5',
            'nama_sub' => 'Ya',
            'nilai' => 3,
        ]);
    }
}
