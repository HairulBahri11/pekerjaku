<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Http\Requests\DetailTransaksiRequest;

/**
 * Class DetailTransaksiController
 * @package App\Http\Controllers
 */
class DetailTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detailTransaksis = DetailTransaksi::paginate();

        return view('detail-transaksi.index', compact('detailTransaksis'))
            ->with('i', (request()->input('page', 1) - 1) * $detailTransaksis->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $detailTransaksi = new DetailTransaksi();
        return view('detail-transaksi.create', compact('detailTransaksi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DetailTransaksiRequest $request)
    {
        DetailTransaksi::create($request->validated());

        return redirect()->route('detail-transaksis.index')
            ->with('success', 'DetailTransaksi created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $detailTransaksi = DetailTransaksi::find($id);

        return view('detail-transaksi.show', compact('detailTransaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $detailTransaksi = DetailTransaksi::find($id);

        return view('detail-transaksi.edit', compact('detailTransaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DetailTransaksiRequest $request, DetailTransaksi $detailTransaksi)
    {
        $detailTransaksi->update($request->validated());

        return redirect()->route('detail-transaksis.index')
            ->with('success', 'DetailTransaksi updated successfully');
    }

    public function destroy($id)
    {
        DetailTransaksi::find($id)->delete();

        return redirect()->route('detail-transaksis.index')
            ->with('success', 'DetailTransaksi deleted successfully');
    }
}
