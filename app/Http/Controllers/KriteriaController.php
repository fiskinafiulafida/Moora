<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::latest()->get();
        return view('Kriteria.main', compact('kriteria'));
    }

    public function create()
    {
        return view('Kriteria.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kriteria' => 'required',
            'bobot' => 'required',
            'jenis_kriteria' => 'required'
        ]);
        Kriteria::create($request->all());

        return redirect()->route('kriteria.index')->with('succes', 'Data Berhasil di Input');
    }

    // edit data
    // public function edit(Kriteria $kriteria)
    // {
    //     return view('kriteria.edit', compact('kriteria'));
    // }

    // public function update(Request $request, Kriteria $kriteria)
    // {
    //     $request->validate([
    //         'nama_kriteria' => 'required',
    //         'bobot' => 'required',
    //         'jenis_kriteria' => 'required'
    //     ]);

    //     $kriteria->update($request->all());

    //     return redirect()->route('kriteria.index')->with('succes', 'Data Berhasil di Update');
    // }


    public function ubahKriteria($id)
    {
        $kriteria = Kriteria::find($id);
        return view('Kriteria.edit', [
            'title' => 'Ubah Kriteria',
            'kriteria' => $kriteria
        ]);
    }

    public function ubah(Request $request, $id)
    {
        $rules = [
            'nama_kriteria' => 'required|max:255',
            'bobot' => 'required|integer|max:255',
            'jenis_kriteria' => 'required|max:255',
        ];

        $validatedData = $request->validate($rules);

        Kriteria::find($id)->update($validatedData);

        return redirect('/kriteria')->with('success', 'Ubah Data Kriteria Berhasil');
    }

    public function destroy(Kriteria $kriteria)
    {
        $kriteria->delete();

        return redirect()->route('kriteria.index')->with('succes', 'Data Berhasil di Hapus');
    }
}
