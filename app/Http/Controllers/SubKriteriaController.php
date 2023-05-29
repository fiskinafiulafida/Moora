<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\SubKriteria;
use Illuminate\Http\Request;

class SubKriteriaController extends Controller
{
    public function lihatSub()
    {
        return view('SubKriteria.main', [
            'title' => 'Lihat Subkriteria',
            'subkriteria' => SubKriteria::all(),
            'kriteria' => Kriteria::all()
        ]);
    }

    public function tambahSub($id)
    {
        $kriteria = Kriteria::find($id);
        return view('SubKriteria.create', [
            'title' => 'Tambah Sub',
            'kriteria' => $kriteria
        ]);
    }

    public function tambah(Request $request)
    {
        $validatedData = $request->validate([
            'kriteria_id' => 'required|alpha_num|max:255',
            'nama_sub' => 'required|max:255',
            'nilai' => 'required|alpha_num|max:255',
        ]);

        SubKriteria::create($validatedData);

        return redirect('/subkriteria')->with('success', 'Tambah Data Sub Berhasil');
    }

    public function ubahSub($id)
    {
        $sub = SubKriteria::find($id);
        return view('SubKriteria.edit', [
            'title' => 'Ubah Sub',
            'sub' => $sub,
        ]);
    }

    public function ubah(Request $request, $id)
    {
        $rules = [
            'nama_sub' => 'required|max:255',
            'nilai' => 'required|alpha_num|max:255',
        ];

        $validatedData = $request->validate($rules);

        SubKriteria::find($id)->update($validatedData);

        return redirect('/subkriteria')->with('success', 'Ubah Data Sub Berhasil');
    }

    public function hapus($id)
    {
        $Sub = SubKriteria::find($id);
        SubKriteria::destroy($Sub->id);
        return redirect('/subkriteria')->with('success', 'Data Sub telah dihapus');
    }
}
