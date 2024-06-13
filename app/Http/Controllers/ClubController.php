<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        $clubs = Club::latest()->paginate(10);

        return view('clubs.index', compact('clubs'));
    }

    public function create()
    {
        return view('clubs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kota' => 'required',
            'negara' => 'required',
            'tahun_berdiri' => 'required|numeric',
            'stadion' => 'required',
            'pelatih' => 'required',
        ]);

        Club::create($request->all());

        return redirect()->route('clubs.index')->with('success', 'Klub berhasil ditambahkan.');
    }

    public function show(Club $club)
    {
        return view('clubs.show', compact('club'));
    }

    public function edit(Club $club)
    {
        return view('clubs.edit', compact('club'));
    }

    public function update(Request $request, Club $club)
    {
        $request->validate([
            'nama' => 'required',
            'kota' => 'required',
            'negara' => 'required',
            'tahun_berdiri' => 'required|numeric',
            'stadion' => 'required',
            'pelatih' => 'required',
        ]);

        $club->update($request->all());

        return redirect()->route('clubs.index')->with('success', 'Klub berhasil diupdate.');
    }

    public function destroy(Club $club)
    {
        $club->delete();

        return redirect()->route('clubs.index')->with('success', 'Klub berhasil dihapus.');
    }
}
