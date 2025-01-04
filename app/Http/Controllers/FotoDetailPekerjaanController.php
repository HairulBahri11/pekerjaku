<?php

namespace App\Http\Controllers;

use App\Models\FotoDetailPekerjaan;
use App\Http\Requests\FotoDetailPekerjaanRequest;

/**
 * Class FotoDetailPekerjaanController
 * @package App\Http\Controllers
 */
class FotoDetailPekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fotoDetailPekerjaans = FotoDetailPekerjaan::paginate();

        return view('foto-detail-pekerjaan.index', compact('fotoDetailPekerjaans'))
            ->with('i', (request()->input('page', 1) - 1) * $fotoDetailPekerjaans->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fotoDetailPekerjaan = new FotoDetailPekerjaan();
        return view('foto-detail-pekerjaan.create', compact('fotoDetailPekerjaan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FotoDetailPekerjaanRequest $request)
    {
        FotoDetailPekerjaan::create($request->validated());

        return redirect()->route('foto-detail-pekerjaans.index')
            ->with('success', 'FotoDetailPekerjaan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $fotoDetailPekerjaan = FotoDetailPekerjaan::find($id);

        return view('foto-detail-pekerjaan.show', compact('fotoDetailPekerjaan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fotoDetailPekerjaan = FotoDetailPekerjaan::find($id);

        return view('foto-detail-pekerjaan.edit', compact('fotoDetailPekerjaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FotoDetailPekerjaanRequest $request,  $id)
    {
        FotoDetailPekerjaan::find($id)->update($request->validated());

        return redirect()->route('foto-detail-pekerjaans.index')
            ->with('success', 'FotoDetailPekerjaan updated successfully');
    }

    public function destroy($id)
    {
        FotoDetailPekerjaan::find($id)->delete();

        return redirect()->route('foto-detail-pekerjaans.index')
            ->with('success', 'FotoDetailPekerjaan deleted successfully');
    }
}
