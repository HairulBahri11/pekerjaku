<?php

namespace App\Http\Controllers;

use App\Models\Profesi;
use App\Http\Requests\ProfesiRequest;

/**
 * Class ProfesiController
 * @package App\Http\Controllers
 */
class ProfesiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesis = Profesi::orderBy('created_at', 'desc')->get();
        $title = 'Data Profesi';
        return view('profesi.index', compact('profesis', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profesi = new Profesi();
        return view('profesi.create', compact('profesi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfesiRequest $request)
    {
        Profesi::create($request->validated());

        return redirect()->route('profesi.index')
            ->with('success', 'Tambah Profesi Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $profesi = Profesi::find($id);
        return view('profesi.show', compact('profesi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $profesi = Profesi::find($id);

        $title = 'Data Profesi';
        return view('profesi.edit', compact('profesi', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfesiRequest $request, Profesi $profesi)
    {
        $profesi->first()->update($request->validated());
        return redirect()->route('profesi.index')
            ->with('success', 'Update Profesi Berhasil');
    }

    public function destroy($id)
    {
        Profesi::find($id)->delete();

        return redirect()->route('profesi.index')
            ->with('success', 'Hapus Profesi Berhasil');
    }
}
