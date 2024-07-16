<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class KelasController extends Controller
{

    public function getByTahunAjaran(Request $request)
    {
        $kelas = Kelas::where('tahun_ajaran_id', $request->tahun_ajaran_id)->get();
        return response()->json($kelas);
    }

    public function index()
    {
        $kelas = Kelas::latest()->get();
        return view('admin.kelas.index', compact('kelas'));
    }

    public function create()
    {
        $tahunAjaran = TahunAjaran::all();
        return view('admin.kelas.create', compact('tahunAjaran'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name.*' => 'required|string|max:255',
            'tahun_ajaran_id' => 'required|exists:tahun_ajarans,id',
        ]);

        $kelas = [];
        foreach ($request->name as $name) {
            $kelas[] = [
                'name' => $name,
                'tahun_ajaran_id' => $request->tahun_ajaran_id,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        Kelas::insert($kelas);

        return redirect()->route('kelas.index')
            ->with('success', 'Kelas berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        $tahunAjaran = TahunAjaran::all();
        return view('admin.kelas.edit', compact('kelas', 'tahunAjaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'tahun_ajaran_id' => 'required|exists:tahun_ajarans,id',
        ]);

        $kelas = Kelas::findOrFail($id);
        $kelas->update([
            'name' => $request->name,
            'tahun_ajaran_id' => $request->tahun_ajaran_id,
        ]);

        return redirect()->route('kelas.index')
            ->with('success', 'Kelas berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return redirect()->route('kelas.index')
            ->with('success', 'Kelas berhasil dihapus.');
    }
}
