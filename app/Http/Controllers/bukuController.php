<?php

namespace App\Http\Controllers;

use App\Models\bukuModel;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Data Buku";
        $data = bukuModel::orderBy('created_at', 'desc')->get();

        return view('buku.index', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Data Buku';
        return view('buku.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = bukuModel::create([
            'judul_buku' => $request->judul_buku,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'thn_terbit' => $request->thn_terbit,
            'jumlah' => $request->jumlah
        ]);

        if ($data) {
            return redirect('buku')->with('success', 'Data Buku Berhasil Di Kembalikan');
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
        $title = 'Edit Data Buku';
        $data = bukuModel::find($id);
        return view('buku.update', compact('title', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = bukuModel::find($id);
        $data->judul_buku = $request->judul_buku;
        $data->penulis = $request->penulis;
        $data->penerbit = $request->penerbit;
        $data->thn_terbit = $request->thn_terbit;
        $data->jumlah = $request->jumlah;
        $data->update();

        if ($data) {
            return redirect('buku')->with('success', 'Data Pengembalian Berhasil Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = bukuModel::find($id);
        $data->delete();

        if ($data) {
            return redirect('buku')->with('success', 'Data Pengembalian Berhasil Dihapus');
        }
    }
}
