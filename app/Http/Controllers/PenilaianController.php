<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Alternatif;
use Illuminate\Http\Request;
use App\Models\SubKriteria;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNan;

class PenilaianController extends Controller
{
    public function lihatPenilaian()
    {
        return view('Penilaian.main', [
            'title' => 'Penilaian',
            'penilaian' => Penilaian::all(),
            'alternatif' => Alternatif::all(),
            'kriteria' => Kriteria::all(),
            'subkriteria' => SubKriteria::all()
        ]);
    }

    public function jalur($id)
    {
        if (Penilaian::where('alternatif_id', $id)->get()->count()) {
            return $this->ubahPenilaian($id);
        } else {
            return $this->tambahPenilaian($id);
        }
    }


    public function tambahPenilaian($id)
    {
        $alternatif = Alternatif::find($id);
        $kriteria = Kriteria::all();
        $subkriteria = SubKriteria::all();
        return view('Penilaian.create', [
            'title' => 'Tambah Penilaian',
            'alternatif' => $alternatif,
            'kriteria' => $kriteria,
            'subkriteria' => $subkriteria
        ]);
    }


    public function tambah(Request $request)
    {

        $validatedData = $request->validate([
            'alternatif_id' => 'required|max:255',
            'sub_kriteria1_id' => 'required|max:255',
            'sub_kriteria2_id' => 'required|max:255',
            'sub_kriteria3_id' => 'required|max:255',
            'sub_kriteria4_id' => 'required|max:255',
            'sub_kriteria5_id' => 'required|max:255',
            'sub_kriteria6_id' => 'required|max:255',
            'sub_kriteria7_id' => 'required|max:255',
            'sub_kriteria8_id' => 'required|max:255',
            'sub_kriteria9_id' => 'required|max:255',
            'sub_kriteria10_id' => 'required|max:255',
        ]);

        Penilaian::create($validatedData);

        return redirect('/penilaian')->with('success', 'Tambah Data Penilaian Berhasil');
    }


    public function ubahPenilaian($id)
    {
        $penilaian = Penilaian::where('alternatif_id', $id)->first();
        $kriteria = Kriteria::all();
        $subkriteria = SubKriteria::all();
        return view('Penilaian.edit', [
            'title' => 'Ubah Penilaian',
            'penilaian' => $penilaian,
            'kriteria' => $kriteria,
            'subkriteria' => $subkriteria
        ]);
    }

    public function ubah(Request $request, $id)
    {
        $rules = [
            'alternatif_id' => 'required|max:255',
            'sub_kriteria1_id' => 'required|max:255',
            'sub_kriteria2_id' => 'required|max:255',
            'sub_kriteria3_id' => 'required|max:255',
            'sub_kriteria4_id' => 'required|max:255',
            'sub_kriteria5_id' => 'required|max:255',
            'sub_kriteria6_id' => 'required|max:255',
            'sub_kriteria7_id' => 'required|max:255',
            'sub_kriteria8_id' => 'required|max:255',
            'sub_kriteria9_id' => 'required|max:255',
            'sub_kriteria10_id' => 'required|max:255',
        ];

        $validatedData = $request->validate($rules);

        Penilaian::where('alternatif_id', $id)->first()->update($validatedData);

        return redirect('/penilaian')->with('success', 'Ubah Data Penilaian Berhasil');
    }

    public function hapus($id)
    {
        $penilaian = Penilaian::find($id);
        Penilaian::destroy($penilaian->id);
        return redirect('/penilaian')->with('success', 'Data Penilaian telah dihapus');
    }
}
