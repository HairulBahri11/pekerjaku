<?php

namespace App\Http\Controllers;

use App\Models\bukuModel;
use App\Models\peminjamanModel;
use App\Models\siswaModel;
use PDF;
use Illuminate\Http\Request;

class peminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Data Peminjaman";
        $data = peminjamanModel::orderBy('created_at', 'desc')->get();

        return view('peminjaman.index', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Data Peminjaman';
        $buku = bukuModel::orderBy('created_at', 'desc')->get();
        $siswa = siswaModel::orderBy('created_at', 'desc')->get();

        return view('peminjaman.create', compact('title', 'buku', 'siswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = peminjamanModel::create([
            'siswa_id' => $request->siswa_id,
            'buku_id' => $request->buku_id,
            'tgl_peminjaman' => $request->tgl_peminjaman,
            'tgl_jatuh_tempo' => $request->tgl_jatuh_tempo
        ]);

        if ($data) {
            return redirect('peminjaman')->with('success', 'Data Peminjaman Berhasil Di Tambahkan');
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
        $title = 'Edit Data Peminjaman';
        $data = peminjamanModel::find($id);
        $buku = bukuModel::orderBy('created_at', 'desc')->get();
        $siswa = siswaModel::orderBy('created_at', 'desc')->get();

        return view('peminjaman.update', compact('title', 'data', 'buku', 'siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = peminjamanModel::find($id);
        $data->siswa_id = $request->siswa_id;
        $data->buku_id = $request->buku_id;
        $data->tgl_peminjaman = $request->tgl_peminjaman;
        $data->tgl_jatuh_tempo = $request->tgl_jatuh_tempo;
        $data->update();

        if ($data) {
            return redirect('peminjaman')->with('success', 'Data Peminjaman Berhasil Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = peminjamanModel::find($id);
        $data->delete();

        if ($data) {
            return redirect('peminjaman')->with('success', 'Data Peminjaman Berhasil Dihapus');
        }
    }



    public function cetak_peminjaman()
    {
        $data = peminjamanModel::orderBy('created_at', 'desc')->get();
        $title = 'Laporan Peminjaman';
        $pdf = PDF::loadview('peminjaman.laporan-pdf', compact('data', 'title'))->setPaper('a4', 'landscape');
        return $pdf->download('Laporan Peminjaman_' . uniqid() . '_' . date('Y-m-d H-i-s') . '.xlsx');
    }
}
