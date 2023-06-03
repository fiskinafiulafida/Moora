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

        Alternatif::create([
            'kode' => 'A4',
            'nama_alternatif' => 'Robi',
        ]);
        Alternatif::create([
            'kode' => 'A5',
            'nama_alternatif' => 'Ilham',
        ]);
        Alternatif::create([
            'kode' => 'A6',
            'nama_alternatif' => 'Zulfi',
        ]);

        Alternatif::create([
            'kode' => 'A7',
            'nama_alternatif' => 'ALisya',
        ]);
        Alternatif::create([
            'kode' => 'A8',
            'nama_alternatif' => 'Bambang',
        ]);
        Alternatif::create([
            'kode' => 'A9',
            'nama_alternatif' => 'Desta',
        ]);
        Alternatif::create([
            'kode' => 'A10',
            'nama_alternatif' => 'Bima',
        ]);
        Alternatif::create([
            'kode' => 'A11',
            'nama_alternatif' => 'Dewa',
        ]);
        Alternatif::create([
            'kode' => 'A12',
            'nama_alternatif' => 'Nadin',
        ]);
        Alternatif::create([
            'kode' => 'A13',
            'nama_alternatif' => 'Riska',
        ]);
        Alternatif::create([
            'kode' => 'A14',
            'nama_alternatif' => 'Mustika',
        ]);
        Alternatif::create([
            'kode' => 'A15',
            'nama_alternatif' => 'Dhena',
        ]);
        Alternatif::create([
            'kode' => 'A16',
            'nama_alternatif' => 'Satya',
        ]);
        Alternatif::create([
            'kode' => 'A17',
            'nama_alternatif' => 'Wisnu',
        ]);
        Alternatif::create([
            'kode' => 'A18',
            'nama_alternatif' => 'Dwiary',
        ]);
        Alternatif::create([
            'kode' => 'A19',
            'nama_alternatif' => 'Rheina',
        ]);
        Alternatif::create([
            'kode' => 'A20',
            'nama_alternatif' => 'Fanny',
        ]);

        // Kriteria 1
        Kriteria::create([
            'nama_kriteria' => 'Prestasi',
            'bobot' => 10,
            'jenis_kriteria' => 'Benefit'
        ]);
        Kriteria::create([
            'nama_kriteria' => 'Kedisiplinan',
            'bobot' => 15,
            'jenis_kriteria' => 'Benefit'
        ]);
        Kriteria::create([
            'nama_kriteria' => 'Organisasi',
            'bobot' => 5,
            'jenis_kriteria' => 'Benefit'
        ]);
        Kriteria::create([
            'nama_kriteria' => 'Sikap',
            'bobot' => 10,
            'jenis_kriteria' => 'Benefit'
        ]);

        Kriteria::create([
            'nama_kriteria' => 'Public Speaking',
            'bobot' => 10,
            'jenis_kriteria' => 'Benefit'
        ]);
        Kriteria::create([
            'nama_kriteria' => 'Rajin',
            'bobot' => 5,
            'jenis_kriteria' => 'Benefit'
        ]);
        Kriteria::create([
            'nama_kriteria' => 'IPK',
            'bobot' => 10,
            'jenis_kriteria' => 'Benefit'
        ]);
        Kriteria::create([
            'nama_kriteria' => 'Karya Tulis',
            'bobot' => 5,
            'jenis_kriteria' => 'Benefit'
        ]);
        Kriteria::create([
            'nama_kriteria' => 'Masa Pendidikan',
            'bobot' => 5,
            'jenis_kriteria' => 'Cost'
        ]);
        Kriteria::create([
            'nama_kriteria' => 'Umur',
            'bobot' => 25,
            'jenis_kriteria' => 'Cost'
        ]);

        // Subkriteria 1
        SubKriteria::create([
            'kriteria_id' => '1',
            'nama_sub' => 'Kurang',
            'nilai' => 1,
        ]);
        SubKriteria::create([
            'kriteria_id' => '1',
            'nama_sub' => 'Cukup',
            'nilai' => 2,
        ]);
        SubKriteria::create([
            'kriteria_id' => '1',
            'nama_sub' => 'Cukup Baik',
            'nilai' => 3,
        ]);
        SubKriteria::create([
            'kriteria_id' => '1',
            'nama_sub' => 'Baik',
            'nilai' => 4,
        ]);

        SubKriteria::create([
            'kriteria_id' => '1',
            'nama_sub' => 'Sangat Baik',
            'nilai' => 5,
        ]);

        // Subkriteria 2
        SubKriteria::create([
            'kriteria_id' => '2',
            'nama_sub' => 'Kurang',
            'nilai' => 1,
        ]);
        SubKriteria::create([
            'kriteria_id' => '2',
            'nama_sub' => 'Cukup',
            'nilai' => 2,
        ]);
        SubKriteria::create([
            'kriteria_id' => '2',
            'nama_sub' => 'Cukup Baik',
            'nilai' => 3,
        ]);
        SubKriteria::create([
            'kriteria_id' => '2',
            'nama_sub' => 'Baik',
            'nilai' => 4,
        ]);

        SubKriteria::create([
            'kriteria_id' => '2',
            'nama_sub' => 'Sangat Baik',
            'nilai' => 5,
        ]);

        // Subkriteria 3
        SubKriteria::create([
            'kriteria_id' => '3',
            'nama_sub' => 'Kurang',
            'nilai' => 1,
        ]);
        SubKriteria::create([
            'kriteria_id' => '3',
            'nama_sub' => 'Cukup',
            'nilai' => 2,
        ]);
        SubKriteria::create([
            'kriteria_id' => '3',
            'nama_sub' => 'Cukup Baik',
            'nilai' => 3,
        ]);
        SubKriteria::create([
            'kriteria_id' => '3',
            'nama_sub' => 'Baik',
            'nilai' => 4,
        ]);

        SubKriteria::create([
            'kriteria_id' => '3',
            'nama_sub' => 'Sangat Baik',
            'nilai' => 5,
        ]);

        // Subkriteria 4
        SubKriteria::create([
            'kriteria_id' => '4',
            'nama_sub' => 'Kurang',
            'nilai' => 1,
        ]);
        SubKriteria::create([
            'kriteria_id' => '4',
            'nama_sub' => 'Cukup',
            'nilai' => 2,
        ]);
        SubKriteria::create([
            'kriteria_id' => '4',
            'nama_sub' => 'Cukup Baik',
            'nilai' => 3,
        ]);
        SubKriteria::create([
            'kriteria_id' => '4',
            'nama_sub' => 'Baik',
            'nilai' => 4,
        ]);

        SubKriteria::create([
            'kriteria_id' => '4',
            'nama_sub' => 'Sangat Baik',
            'nilai' => 5,
        ]);

        // Subkriteria 5
        SubKriteria::create([
            'kriteria_id' => '5',
            'nama_sub' => 'Kurang',
            'nilai' => 1,
        ]);
        SubKriteria::create([
            'kriteria_id' => '5',
            'nama_sub' => 'Cukup',
            'nilai' => 2,
        ]);
        SubKriteria::create([
            'kriteria_id' => '5',
            'nama_sub' => 'Cukup Baik',
            'nilai' => 3,
        ]);
        SubKriteria::create([
            'kriteria_id' => '5',
            'nama_sub' => 'Baik',
            'nilai' => 4,
        ]);

        SubKriteria::create([
            'kriteria_id' => '5',
            'nama_sub' => 'Sangat Baik',
            'nilai' => 5,
        ]);

       //Subkriteria 6
        SubKriteria::create([
            'kriteria_id' => '6',
            'nama_sub' => 'Kurang',
            'nilai' => 1,
        ]);
        SubKriteria::create([
            'kriteria_id' => '6',
            'nama_sub' => 'Cukup',
            'nilai' => 2,
        ]);
        SubKriteria::create([
            'kriteria_id' => '6',
            'nama_sub' => 'Cukup Baik',
            'nilai' => 3,
        ]);
        SubKriteria::create([
            'kriteria_id' => '6',
            'nama_sub' => 'Baik',
            'nilai' => 4,
        ]);

        SubKriteria::create([
            'kriteria_id' => '6',
            'nama_sub' => 'Sangat Baik',
            'nilai' => 5,
        ]); 
        // Subkriteria 7
        SubKriteria::create([
            'kriteria_id' => '7',
            'nama_sub' => 'Kurang',
            'nilai' => 1,
        ]);
        SubKriteria::create([
            'kriteria_id' => '7',
            'nama_sub' => 'Cukup',
            'nilai' => 2,
        ]);
        SubKriteria::create([
            'kriteria_id' => '7',
            'nama_sub' => 'Cukup Baik',
            'nilai' => 3,
        ]);
        SubKriteria::create([
            'kriteria_id' => '7',
            'nama_sub' => 'Baik',
            'nilai' => 4,
        ]);

        SubKriteria::create([
            'kriteria_id' => '7',
            'nama_sub' => 'Sangat Baik',
            'nilai' => 5,
        ]);
       // Subkriteria 8
        SubKriteria::create([
            'kriteria_id' => '8',
            'nama_sub' => 'Kurang',
            'nilai' => 1,
        ]);
        SubKriteria::create([
            'kriteria_id' => '8',
            'nama_sub' => 'Cukup',
            'nilai' => 2,
        ]);
        SubKriteria::create([
            'kriteria_id' => '8',
            'nama_sub' => 'Cukup Baik',
            'nilai' => 3,
        ]);
        SubKriteria::create([
            'kriteria_id' => '8',
            'nama_sub' => 'Baik',
            'nilai' => 4,
        ]);

        SubKriteria::create([
            'kriteria_id' => '8',
            'nama_sub' => 'Sangat Baik',
            'nilai' => 5,
        ]);
        //Subkriteria 9
        SubKriteria::create([
            'kriteria_id' => '9',
            'nama_sub' => 'Kurang',
            'nilai' => 1,
        ]);
        SubKriteria::create([
            'kriteria_id' => '9',
            'nama_sub' => 'Cukup',
            'nilai' => 2,
        ]);
        SubKriteria::create([
            'kriteria_id' => '9',
            'nama_sub' => 'Cukup Baik',
            'nilai' => 3,
        ]);
        SubKriteria::create([
            'kriteria_id' => '9',
            'nama_sub' => 'Baik',
            'nilai' => 4,
        ]);

        SubKriteria::create([
            'kriteria_id' => '9',
            'nama_sub' => 'Sangat Baik',
            'nilai' => 5,
        ]);
        //Subkriteria 10
        SubKriteria::create([
            'kriteria_id' => '10',
            'nama_sub' => 'Kurang',
            'nilai' => 1,
        ]);
        SubKriteria::create([
            'kriteria_id' => '10',
            'nama_sub' => 'Cukup',
            'nilai' => 2,
        ]);
        SubKriteria::create([
            'kriteria_id' => '10',
            'nama_sub' => 'Cukup Baik',
            'nilai' => 3,
        ]);
        SubKriteria::create([
            'kriteria_id' => '10',
            'nama_sub' => 'Baik',
            'nilai' => 4,
        ]);

        SubKriteria::create([
            'kriteria_id' => '10',
            'nama_sub' => 'Sangat Baik',
            'nilai' => 5,
        ]);
    }
}
