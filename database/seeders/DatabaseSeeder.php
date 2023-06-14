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
            'nama_alternatif' => 'Anita',
        ]);

        Alternatif::create([
            'kode' => 'A2',
            'nama_alternatif' => 'Dani',
        ]);

        Alternatif::create([
            'kode' => 'A3',
            'nama_alternatif' => 'Hanan',
        ]);

        Alternatif::create([
            'kode' => 'A4',
            'nama_alternatif' => 'Joko Setiawan',
        ]);
        Alternatif::create([
            'kode' => 'A5',
            'nama_alternatif' => 'Via',
        ]);
        Alternatif::create([
            'kode' => 'A6',
            'nama_alternatif' => 'Muhammad Ridwan ',
        ]);

        Alternatif::create([
            'kode' => 'A7',
            'nama_alternatif' => 'Putra Mandiri',
        ]);
        Alternatif::create([
            'kode' => 'A8',
            'nama_alternatif' => 'Fadil Andim',
        ]);
        Alternatif::create([
            'kode' => 'A9',
            'nama_alternatif' => 'Muh Anwar',
        ]);
        Alternatif::create([
            'kode' => 'A10',
            'nama_alternatif' => 'Zaenudin',
        ]);
        Alternatif::create([
            'kode' => 'A11',
            'nama_alternatif' => 'Ratono',
        ]);
        Alternatif::create([
            'kode' => 'A12',
            'nama_alternatif' => 'Mukhtar Handayani',
        ]);
        Alternatif::create([
            'kode' => 'A13',
            'nama_alternatif' => 'Egi Kurniawan',
        ]);
        Alternatif::create([
            'kode' => 'A14',
            'nama_alternatif' => 'Aldi Fatah',
        ]);
        Alternatif::create([
            'kode' => 'A15',
            'nama_alternatif' => 'Arif Setiawan ',
        ]);
        Alternatif::create([
            'kode' => 'A16',
            'nama_alternatif' => 'Rizki Jijab',
        ]);
        Alternatif::create([
            'kode' => 'A17',
            'nama_alternatif' => 'Algi Aldiansyah',
        ]);
        Alternatif::create([
            'kode' => 'A18',
            'nama_alternatif' => 'Muhammad Zuh',
        ]);
        Alternatif::create([
            'kode' => 'A19',
            'nama_alternatif' => 'Alpian',
        ]);
        Alternatif::create([
            'kode' => 'A20',
            'nama_alternatif' => 'Supriyadi',
        ]);
        Alternatif::create([
            'kode' => 'A21',
            'nama_alternatif' => 'Kusuma Atmajha',
        ]);

        // Kriteria 1
        Kriteria::create([
            'nama_kriteria' => 'KEHADIRAN',
            'bobot' => 5,
            'jenis_kriteria' => 'Cost'
        ]);
        Kriteria::create([
            'nama_kriteria' => 'JUMLAH SUGESTION SYSTEM',
            'bobot' => 4,
            'jenis_kriteria' => 'Benefit'
        ]);
        Kriteria::create([
            'nama_kriteria' => 'SUGESTION SYSTEM GOLD',
            'bobot' => 4,
            'jenis_kriteria' => 'Benefit'
        ]);
        Kriteria::create([
            'nama_kriteria' => 'SP',
            'bobot' => 4,
            'jenis_kriteria' => 'Benefit'
        ]);

        Kriteria::create([
            'nama_kriteria' => '5R',
            'bobot' => 4,
            'jenis_kriteria' => 'Benefit'
        ]);
        Kriteria::create([
            'nama_kriteria' => 'DISIPLIN KERJA',
            'bobot' => 5,
            'jenis_kriteria' => 'Cost'
        ]);
        Kriteria::create([
            'nama_kriteria' => 'TANGGUNG JAWAB',
            'bobot' => 4,
            'jenis_kriteria' => 'Benefit'
        ]);
        Kriteria::create([
            'nama_kriteria' => 'INISIATIF',
            'bobot' => 4,
            'jenis_kriteria' => 'Benefit'
        ]);
        Kriteria::create([
            'nama_kriteria' => 'KERJA SAMA',
            'bobot' => 4,
            'jenis_kriteria' => 'Benefit'
        ]);
        Kriteria::create([
            'nama_kriteria' => 'KEJUJURAN',
            'bobot' => 4,
            'jenis_kriteria' => 'Benefit'
        ]);

        // Subkriteria 1
        SubKriteria::create([
            'kriteria_id' => '1',
            'nama_sub' => '<95',
            'nilai' => 1,
        ]);
        SubKriteria::create([
            'kriteria_id' => '1',
            'nama_sub' => '95 - 99',
            'nilai' => 3,
        ]);
        SubKriteria::create([
            'kriteria_id' => '1',
            'nama_sub' => '100',
            'nilai' => 5,
        ]);

        // Subkriteria 2
        SubKriteria::create([
            'kriteria_id' => '2',
            'nama_sub' => '0',
            'nilai' => 1,
        ]);
        SubKriteria::create([
            'kriteria_id' => '2',
            'nama_sub' => '<2',
            'nilai' => 2,
        ]);
        SubKriteria::create([
            'kriteria_id' => '2',
            'nama_sub' => '>2',
            'nilai' => 5,
        ]);

        // Subkriteria 3
        SubKriteria::create([
            'kriteria_id' => '3',
            'nama_sub' => '0',
            'nilai' => 0,
        ]);
        SubKriteria::create([
            'kriteria_id' => '3',
            'nama_sub' => '1',
            'nilai' => 4,
        ]);
        SubKriteria::create([
            'kriteria_id' => '3',
            'nama_sub' => '>2',
            'nilai' => 5,
        ]);

        // Subkriteria 4
        SubKriteria::create([
            'kriteria_id' => '4',
            'nama_sub' => 'YA',
            'nilai' => 1,
        ]);
        SubKriteria::create([
            'kriteria_id' => '4',
            'nama_sub' => 'TIDAK',
            'nilai' => 5,
        ]);

        // Subkriteria 5
        SubKriteria::create([
            'kriteria_id' => '5',
            'nama_sub' => '< 80',
            'nilai' => 1,
        ]);
        SubKriteria::create([
            'kriteria_id' => '5',
            'nama_sub' => '80 - 84',
            'nilai' => 2,
        ]);
        SubKriteria::create([
            'kriteria_id' => '5',
            'nama_sub' => '85 - 89',
            'nilai' => 3,
        ]);
        SubKriteria::create([
            'kriteria_id' => '5',
            'nama_sub' => '90 - 94',
            'nilai' => 4,
        ]);

        SubKriteria::create([
            'kriteria_id' => '5',
            'nama_sub' => '95 - 100',
            'nilai' => 5,
        ]);

        //Subkriteria 6
        SubKriteria::create([
            'kriteria_id' => '6',
            'nama_sub' => '< 80',
            'nilai' => 1,
        ]);
        SubKriteria::create([
            'kriteria_id' => '6',
            'nama_sub' => '80 - 84',
            'nilai' => 2,
        ]);
        SubKriteria::create([
            'kriteria_id' => '6',
            'nama_sub' => '85 - 89',
            'nilai' => 3,
        ]);
        SubKriteria::create([
            'kriteria_id' => '6',
            'nama_sub' => '90 - 94',
            'nilai' => 4,
        ]);

        SubKriteria::create([
            'kriteria_id' => '6',
            'nama_sub' => '95 - 100',
            'nilai' => 5,
        ]);
        // Subkriteria 7
        SubKriteria::create([
            'kriteria_id' => '7',
            'nama_sub' => '< 80',
            'nilai' => 1,
        ]);
        SubKriteria::create([
            'kriteria_id' => '7',
            'nama_sub' => '80 - 84',
            'nilai' => 2,
        ]);
        SubKriteria::create([
            'kriteria_id' => '7',
            'nama_sub' => '85 - 89',
            'nilai' => 3,
        ]);
        SubKriteria::create([
            'kriteria_id' => '7',
            'nama_sub' => '90 - 94',
            'nilai' => 4,
        ]);

        SubKriteria::create([
            'kriteria_id' => '7',
            'nama_sub' => '95 - 100',
            'nilai' => 5,
        ]);
        // Subkriteria 8
        SubKriteria::create([
            'kriteria_id' => '8',
            'nama_sub' => '< 80',
            'nilai' => 1,
        ]);
        SubKriteria::create([
            'kriteria_id' => '8',
            'nama_sub' => '80 - 84',
            'nilai' => 2,
        ]);
        SubKriteria::create([
            'kriteria_id' => '8',
            'nama_sub' => '85 - 89',
            'nilai' => 3,
        ]);
        SubKriteria::create([
            'kriteria_id' => '8',
            'nama_sub' => '90 - 94',
            'nilai' => 4,
        ]);

        SubKriteria::create([
            'kriteria_id' => '8',
            'nama_sub' => '95 - 100',
            'nilai' => 5,
        ]);
        //Subkriteria 9
        SubKriteria::create([
            'kriteria_id' => '9',
            'nama_sub' => '< 80',
            'nilai' => 1,
        ]);
        SubKriteria::create([
            'kriteria_id' => '9',
            'nama_sub' => '80 - 84',
            'nilai' => 2,
        ]);
        SubKriteria::create([
            'kriteria_id' => '9',
            'nama_sub' => '85 - 89',
            'nilai' => 3,
        ]);
        SubKriteria::create([
            'kriteria_id' => '9',
            'nama_sub' => '90 - 94',
            'nilai' => 4,
        ]);

        SubKriteria::create([
            'kriteria_id' => '9',
            'nama_sub' => '95 - 100',
            'nilai' => 5,
        ]);
        //Subkriteria 10
        SubKriteria::create([
            'kriteria_id' => '10',
            'nama_sub' => '< 80',
            'nilai' => 1,
        ]);
        SubKriteria::create([
            'kriteria_id' => '10',
            'nama_sub' => '80 - 84',
            'nilai' => 2,
        ]);
        SubKriteria::create([
            'kriteria_id' => '10',
            'nama_sub' => '85 - 89',
            'nilai' => 3,
        ]);
        SubKriteria::create([
            'kriteria_id' => '10',
            'nama_sub' => '90 - 94',
            'nilai' => 4,
        ]);

        SubKriteria::create([
            'kriteria_id' => '10',
            'nama_sub' => '95 - 100',
            'nilai' => 5,
        ]);
    }
}
