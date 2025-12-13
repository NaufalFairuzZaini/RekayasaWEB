<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        return response()->json(Guru::with('kelas')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'mengajar_kelas_id' => 'nullable|exists:kelas,id'
        ]);

        $guru = Guru::create($request->all());

        return response()->json([
            'message' => 'Guru dibuat',
            'data' => $guru
        ]);
    }

    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        $guru->update($request->all());

        return response()->json([
            'message' => 'Guru diperbarui',
            'data' => $guru
        ]);
    }

    public function destroy($id)
    {
        Guru::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Guru dihapus'
        ]);
    }
}