<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kriteria;
use App\Models\Alternatif;
use App\Http\Controllers\Controller;
use App\Models\Perhitungan;
use App\Models\Penilaian;

class PerhitunganController extends Controller
{
    public function lihatLaporan()
    {
        $kriteria = Kriteria::all();
        $alternatif = Alternatif::all();
        $penilaian = Penilaian::all();

        $normalisasi = Perhitungan::normalisasi();
        return view('Perhitungan.main', [
            'title' => 'Laporan',
            'laporan' => 'Laporan',
            'kriteria' => $kriteria,
            'alternatif' => $alternatif,
            'penilaian' => $penilaian,
            'normalisasi' => $normalisasi
        ]);
    }

    public function tes()
    {
        $normal = 'ini';
        $a = 'nor';
        $ab = 'a';
        return dd($$ab);
    }
}
