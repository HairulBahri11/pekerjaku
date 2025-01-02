<?php

namespace App\Http\Controllers;

use App\Models\LokasiKerja;
use App\Http\Requests\LokasiKerjaRequest;

/**
 * Class LokasiKerjaController
 * @package App\Http\Controllers
 */
class LokasiKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lokasiKerjas = LokasiKerja::paginate();

        return view('lokasi-kerja.index', compact('lokasiKerjas'))
            ->with('i', (request()->input('page', 1) - 1) * $lokasiKerjas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lokasiKerja = new LokasiKerja();
        return view('lokasi-kerja.create', compact('lokasiKerja'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LokasiKerjaRequest $request)
    {
        LokasiKerja::create($request->validated());

        return redirect()->route('lokasi-kerjas.index')
            ->with('success', 'LokasiKerja created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $lokasiKerja = LokasiKerja::find($id);

        return view('lokasi-kerja.show', compact('lokasiKerja'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $lokasiKerja = LokasiKerja::find($id);

        return view('lokasi-kerja.edit', compact('lokasiKerja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LokasiKerjaRequest $request, LokasiKerja $lokasiKerja)
    {
        $lokasiKerja->update($request->validated());

        return redirect()->route('lokasi-kerjas.index')
            ->with('success', 'LokasiKerja updated successfully');
    }

    public function destroy($id)
    {
        LokasiKerja::find($id)->delete();

        return redirect()->route('lokasi-kerjas.index')
            ->with('success', 'LokasiKerja deleted successfully');
    }
}
