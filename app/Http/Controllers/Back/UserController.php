<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\TahunAjaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function filter(Request $request)
    {
        $users = User::where('role', 'siswa');

        // Filter berdasarkan kelas
        if ($request->has('kelas_id')) {
            $users->where('kelas_id', $request->kelas_id);
        }

        // Filter berdasarkan tahun ajaran
        if ($request->has('tahun_ajaran_id')) {
            $users->where('tahun_ajaran_id', $request->tahun_ajaran_id);
        }

        $users = $users->get();

        return view('admin.users._table', compact('users'))->render();
    }

    public function index(Request $request)
    {
        $users = User::where('role', 'siswa');

        // Filter berdasarkan kelas
        if ($request->has('kelas_id')) {
            $users->where('kelas_id', $request->kelas_id);
        }

        // Filter berdasarkan tahun ajaran
        if ($request->has('tahun_ajaran_id')) {
            $users->where('tahun_ajaran_id', $request->tahun_ajaran_id);
        }

        $users = $users->get();

        // Ambil data kelas untuk dropdown
        $kelas = Kelas::all(); // Sesuaikan sesuai dengan model dan relasi Anda
        $tahunAjaran = tahunAjaran::all();
        return view('admin.users.index', compact('users', 'tahunAjaran', 'kelas'));
    }

    /**
     * Menampilkan form untuk membuat pengguna baru.
     */
    public function create()
    {
        $kelas = Kelas::all();
        $tahunAjaran = TahunAjaran::all();
        return view('admin.users.create', compact('kelas', 'tahunAjaran'));
    }

    /**
     * Menyimpan pengguna baru ke dalam database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required|in:admin,siswa', // Sesuaikan dengan role yang valid
            'kelas_id' => 'nullable|exists:kelas,id',
            'tahun_ajaran_id' => 'nullable|exists:tahun_ajarans,id',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->kelas_id = $request->kelas_id;
        $user->tahun_ajaran_id = $request->tahun_ajaran_id;
        $user->save();

        return redirect()->route('users.index')
            ->with('success', 'Pengguna berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail pengguna.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user'));
    }

    /**
     * Menampilkan form untuk mengedit pengguna.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $kelas = Kelas::all();
        $tahunAjaran = TahunAjaran::all();
        return view('admin.users.edit', compact('user', 'kelas', 'tahunAjaran'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8',
            'role' => 'required|in:admin,siswa',
            'kelas_id' => 'nullable|exists:kelas,id',
            'tahun_ajaran_id' => 'nullable|exists:tahun_ajarans,id',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->role = $request->role;
        $user->kelas_id = $request->kelas_id;
        $user->tahun_ajaran_id = $request->tahun_ajaran_id;
        $user->save();

        return redirect()->route('users.index')
            ->with('success', 'Pengguna berhasil diperbarui.');
    }

    /**
     * Menghapus pengguna dari database.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'Pengguna berhasil dihapus.');
    }
}
