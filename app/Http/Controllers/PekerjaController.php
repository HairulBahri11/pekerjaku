<?php

namespace App\Http\Controllers;

use App\Models\Pekerja;
use App\Http\Requests\PekerjaRequest;

/**
 * Class PekerjaController
 * @package App\Http\Controllers
 */
class PekerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pekerjas = Pekerja::paginate();

        return view('pekerja.index', compact('pekerjas'))
            ->with('i', (request()->input('page', 1) - 1) * $pekerjas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pekerja = new Pekerja();
        return view('pekerja.create', compact('pekerja'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PekerjaRequest $request)
    {
        Pekerja::create($request->validated());

        return redirect()->route('pekerjas.index')
            ->with('success', 'Pekerja created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pekerja = Pekerja::find($id);

        return view('pekerja.show', compact('pekerja'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pekerja = Pekerja::find($id);

        return view('pekerja.edit', compact('pekerja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PekerjaRequest $request, $id)
    {
        Pekerja::find($id)->update($request->validated());

        return redirect()->route('pekerjas.index')
            ->with('success', 'Pekerja updated successfully');
    }

    public function destroy($id)
    {
        Pekerja::find($id)->delete();

        return redirect()->route('pekerjas.index')
            ->with('success', 'Pekerja deleted successfully');
    }
}
