<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;

class AlternatifController extends Controller
{
    public function index()
    {
        $alternatif = Alternatif::latest()->get();
        return view('Alternatif.main', compact('alternatif'));
    }

    public function create()
    {
        return view('Alternatif.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama_alternatif' => 'required',
        ]);
        Alternatif::create($request->all());

        return redirect()->route('alternatif.index')->with('succes', 'Data Berhasil di Input');
    }

    // edit data
    public function edit(Alternatif $alternatif)
    {
        return view('alternatif.edit', compact('alternatif'));
    }

    public function update(Request $request, Alternatif $alternatif)
    {
        $request->validate([
            'kode' => 'required',
            'nama_alternatif' => 'required',
        ]);

        $alternatif->update($request->all());

        return redirect()->route('alternatif.index')->with('succes', 'Data Berhasil di Update');
    }

    // delete data
    public function destroy(Alternatif $alternatif)
    {
        $alternatif->delete();

        return redirect()->route('alternatif.index')->with('succes', 'Data Berhasil di Hapus');
    }
}
