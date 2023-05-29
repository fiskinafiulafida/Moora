<?php

namespace App\Http\Controllers;

use App\Models\SubKriteria;
use Illuminate\Http\Request;

class SubKriteriaController extends Controller
{
    public function index()
    {
        $subkriteria = SubKriteria::latest()->get();
        return view('SubKriteria.main', compact('subkriteria'));
    }

    public function create()
    {
        return view('SubKriteria.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kriteria_id' => 'required|alpha_num|max:255',
            'nama_sub' => 'required|max:255',
            'nilai' => 'required|alpha_num|max:255',
        ]);
        SubKriteria::create($request->all());

        return redirect()->route('subkriteria.index')->with('succes', 'Data Berhasil di Input');
    }

    // edit data
    public function edit(SubKriteria $subkriteria)
    {
        return view('subkriteria.edit', compact('subkriteria'));
    }


    public function update(Request $request, SubKriteria $alternatif)
    {
        $request->validate([
            'nama_sub' => 'required|max:255',
            'nilai' => 'required|alpha_num|max:255',
        ]);

        $alternatif->update($request->all());

        return redirect()->route('alternatif.index')->with('succes', 'Data Berhasil di Update');
    }

    // delete data
    public function destroy(SubKriteria $alternatif)
    {
        $alternatif->delete();

        return redirect()->route('alternatif.index')->with('succes', 'Data Berhasil di Hapus');
    }
}
