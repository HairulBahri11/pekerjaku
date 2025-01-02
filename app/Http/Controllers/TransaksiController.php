<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Http\Requests\TransaksiRequest;

/**
 * Class TransaksiController
 * @package App\Http\Controllers
 */
class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = Transaksi::paginate();

        return view('transaksi.index', compact('transaksis'))
            ->with('i', (request()->input('page', 1) - 1) * $transaksis->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $transaksi = new Transaksi();
        return view('transaksi.create', compact('transaksi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TransaksiRequest $request)
    {
        Transaksi::create($request->validated());

        return redirect()->route('transaksis.index')
            ->with('success', 'Transaksi created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $transaksi = Transaksi::find($id);

        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $transaksi = Transaksi::find($id);

        return view('transaksi.edit', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TransaksiRequest $request, Transaksi $transaksi)
    {
        $transaksi->update($request->validated());

        return redirect()->route('transaksis.index')
            ->with('success', 'Transaksi updated successfully');
    }

    public function destroy($id)
    {
        Transaksi::find($id)->delete();

        return redirect()->route('transaksis.index')
            ->with('success', 'Transaksi deleted successfully');
    }
}
