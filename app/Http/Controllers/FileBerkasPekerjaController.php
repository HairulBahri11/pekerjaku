<?php

namespace App\Http\Controllers;

use App\Models\FileBerkasPekerja;
use App\Http\Requests\FileBerkasPekerjaRequest;

/**
 * Class FileBerkasPekerjaController
 * @package App\Http\Controllers
 */
class FileBerkasPekerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fileBerkasPekerjas = FileBerkasPekerja::paginate();

        return view('file-berkas-pekerja.index', compact('fileBerkasPekerjas'))
            ->with('i', (request()->input('page', 1) - 1) * $fileBerkasPekerjas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fileBerkasPekerja = new FileBerkasPekerja();
        return view('file-berkas-pekerja.create', compact('fileBerkasPekerja'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FileBerkasPekerjaRequest $request)
    {
        FileBerkasPekerja::create($request->validated());

        return redirect()->route('file-berkas-pekerjas.index')
            ->with('success', 'FileBerkasPekerja created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $fileBerkasPekerja = FileBerkasPekerja::find($id);

        return view('file-berkas-pekerja.show', compact('fileBerkasPekerja'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fileBerkasPekerja = FileBerkasPekerja::find($id);

        return view('file-berkas-pekerja.edit', compact('fileBerkasPekerja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FileBerkasPekerjaRequest $request, FileBerkasPekerja $fileBerkasPekerja)
    {
        $fileBerkasPekerja->update($request->validated());

        return redirect()->route('file-berkas-pekerjas.index')
            ->with('success', 'FileBerkasPekerja updated successfully');
    }

    public function destroy($id)
    {
        FileBerkasPekerja::find($id)->delete();

        return redirect()->route('file-berkas-pekerjas.index')
            ->with('success', 'FileBerkasPekerja deleted successfully');
    }
}
