<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Http\Requests\PemesananRequest;

/**
 * Class PemesananController
 * @package App\Http\Controllers
 */
class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemesanans = Pemesanan::paginate();

        return view('pemesanan.index', compact('pemesanans'))
            ->with('i', (request()->input('page', 1) - 1) * $pemesanans->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pemesanan = new Pemesanan();
        return view('pemesanan.create', compact('pemesanan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PemesananRequest $request)
    {
        Pemesanan::create($request->validated());

        return redirect()->route('pemesanans.index')
            ->with('success', 'Pemesanan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pemesanan = Pemesanan::find($id);

        return view('pemesanan.show', compact('pemesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pemesanan = Pemesanan::find($id);

        return view('pemesanan.edit', compact('pemesanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PemesananRequest $request,  $id)
    {
        Pemesanan::find($id)->update($request->validated());

        return redirect()->route('pemesanans.index')
            ->with('success', 'Pemesanan updated successfully');
    }

    public function destroy($id)
    {
        Pemesanan::find($id)->delete();

        return redirect()->route('pemesanans.index')
            ->with('success', 'Pemesanan deleted successfully');
    }
}
