<?php
namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $thn = TahunAjaran::latest()->get();
        return view('admin.tahun_ajaran.index', compact('thn'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tahun_ajaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required|string|max:255|unique:tahun_ajarans,tahun',
        ]);

        TahunAjaran::create($request->all());

        return redirect()->route('tahun-ajaran.index')->with('success', 'Tahun Ajaran berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Tidak digunakan dalam contoh ini
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tahunAjaran = TahunAjaran::findOrFail($id);
        return view('admin.tahun_ajaran.edit', compact('tahunAjaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tahun' => 'required|string|max:255|unique:tahun_ajarans,tahun,' . $id,
        ]);

        $tahunAjaran = TahunAjaran::findOrFail($id);
        $tahunAjaran->update($request->all());

        return redirect()->route('tahun-ajaran.index')->with('success', 'Tahun Ajaran berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tahunAjaran = TahunAjaran::findOrFail($id);
        $tahunAjaran->delete();

        return redirect()->route('tahun-ajaran.index')->with('success', 'Tahun Ajaran berhasil dihapus.');
    }
}
