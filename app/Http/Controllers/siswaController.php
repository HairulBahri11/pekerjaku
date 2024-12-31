<?php

namespace App\Http\Controllers;

use App\Models\siswaModel;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Data Siswa";
        $data = siswaModel::orderBy('created_at', 'desc')->get();

        return view('siswa.index', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Data Siswa';
        return view('siswa.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = siswaModel::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);

        if ($data) {
            return redirect('siswa')->with('success', 'Data Siswa Berhasil Di Tambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Edit Data Siswa';
        $data = siswaModel::find($id);
        return view('siswa.update', compact('title', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = siswaModel::find($id);
        $data->nama = $request->nama;
        $data->kelas = $request->kelas;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->update();

        if ($data) {
            return redirect('siswa')->with('success', 'Data Siswa Berhasil Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = siswaModel::find($id);
        $data->delete();

        if ($data) {
            return redirect('siswa')->with('success', 'Data Siswa Berhasil Dihapus');
        }
    }
}
