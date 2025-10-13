<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{

    public function index()
    {
        $drivers = Driver::all(); 
        return view('driver.index', compact('drivers'));
    }

    
    public function create()
    {
        return view('driver.create');
    }
 
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'nullable|string|max:255',
        ]);

        Driver::create($validated);

        return redirect()->route('driver.index')->with('success', 'Driver berhasil ditambahkan.');
    }

    public function show(Driver $driver)
    {
    }

    public function edit(Driver $driver)
    {
        return view('driver.edit', compact('driver'));
    }

    public function update(Request $request, Driver $driver)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'nullable|string|max:255',
        ]);

        $driver->update($validated);

        return redirect()->route('driver.index')->with('success', 'Data driver berhasil diperbarui.');
    }

    public function destroy(Driver $driver)
    {
        $driver->delete();

        return redirect()->route('driver.index')->with('success', 'Driver berhasil dihapus.');
    }
}
