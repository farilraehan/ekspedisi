<?php

namespace App\Http\Controllers;

use App\Models\Armada;
use Illuminate\Http\Request;

class ArmadaController extends Controller
{
    public function index()
    {
        $armadas = Armada::all();
        return view('armada.index', compact('armadas'));
    }

    public function create()
    {
        return view('armada.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'plat_nomor' => 'required|string|max:50',
            'jenis' => 'nullable|string|max:100',
        ]);

        Armada::create($validated);

        return redirect()->route('armada.index')->with('success', 'Armada berhasil ditambahkan.');
    }

    public function edit(Armada $armada)
    {
        return view('armada.edit', compact('armada'));
    }

    public function update(Request $request, Armada $armada)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'plat_nomor' => 'required|string|max:50',
            'jenis' => 'nullable|string|max:100',
        ]);

        $armada->update($validated);

        return redirect()->route('armadas.index')->with('success', 'Armada berhasil diperbarui.');
    }

    public function destroy(Armada $armada)
    {
        $armada->delete();
        return redirect()->route('armadas.index')->with('success', 'Armada berhasil dihapus.');
    }
}
