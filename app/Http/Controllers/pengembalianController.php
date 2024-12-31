<?php

namespace App\Http\Controllers;

use App\Models\peminjamanModel;
use App\Models\pengembalianModel;
use PDF;
use Illuminate\Http\Request;

class pengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Data Pengembalian";
        $data = pengembalianModel::orderBy('created_at', 'desc')->get();

        return view('pengembalian.index', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $title = 'Edit Data Peminjaman';
        $data = peminjamanModel::find($id);
        return view('pengembalian.create', compact('title', 'data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = pengembalianModel::create([
            'peminjaman_id' => $request->peminjaman_id,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'denda' => $request->denda,
        ]);

        if ($data) {
            return redirect()->back()->with('success', 'Pengembalian Buku Berhasil Di Tambahkan');
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
        $data = pengembalianModel::find($id);

        return view('pengembalian.update', compact('title', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = pengembalianModel::find($id);
        $data->peminjaman_id = $request->peminjaman_id;
        $data->tanggal_pengembalian = $request->tanggal_pengembalian;
        $data->denda = $request->denda;
        $data->update();

        if ($data) {
            return redirect('pengembalian')->with('success', 'Data Pengembalian Berhasil Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = pengembalianModel::find($id);
        $data->delete();

        if ($data) {
            return redirect('pengembalian')->with('success', 'Data Pengembalian Berhasil Dihapus');
        }
    }

    public function cetak_pengembalian()
    {
        $data = pengembalianModel::orderBy('created_at', 'desc')->get();
        $title = 'Laporan Pengembalian';
        $pdf = PDF::loadview('pengembalian.laporan-pdf', compact('data', 'title'))->setPaper('a4', 'landscape');
        return $pdf->download('Laporan Pengembalian_' . uniqid() . '_' . date('Y-m-d H-i-s') . '.xlsx');
    }
}
