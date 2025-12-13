<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    // CREATE / STORE
    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'nama_kelas' => 'required|string|max:255'
        ]);

        // simpan ke database
        $kelas = Kelas::create([
            'nama_kelas' => $request->nama_kelas
        ]);

        return response()->json([
            'message' => 'Kelas berhasil ditambahkan',
            'data' => $kelas
        ], 201);
    }

    // READ ALL
    public function index()
    {
        return response()->json([
            'message' => 'Data kelas berhasil diambil',
            'data' => Kelas::all()
        ], 200);
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $kelas = Kelas::find($id);

        if (!$kelas) {
            return response()->json([
                'message' => 'Kelas tidak ditemukan'
            ], 404);
        }

        $request->validate([
            'nama_kelas' => 'required|string|max:255'
        ]);

        $kelas->update([
            'nama_kelas' => $request->nama_kelas
        ]);

        return response()->json([
            'message' => 'Kelas berhasil diupdate',
            'data' => $kelas
        ], 200);
    }

    // DELETE
    public function destroy($id)
    {
        $kelas = Kelas::find($id);

        if (!$kelas) {
            return response()->json([
                'message' => 'Kelas tidak ditemukan'
            ], 404);
        }

        $kelas->delete();

        return response()->json([
            'message' => 'Kelas berhasil dihapus'
        ], 200);
    }
}
