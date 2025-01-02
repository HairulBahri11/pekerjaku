<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use App\Http\Requests\UlasanRequest;

/**
 * Class UlasanController
 * @package App\Http\Controllers
 */
class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ulasans = Ulasan::paginate();

        return view('ulasan.index', compact('ulasans'))
            ->with('i', (request()->input('page', 1) - 1) * $ulasans->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ulasan = new Ulasan();
        return view('ulasan.create', compact('ulasan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UlasanRequest $request)
    {
        Ulasan::create($request->validated());

        return redirect()->route('ulasans.index')
            ->with('success', 'Ulasan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ulasan = Ulasan::find($id);

        return view('ulasan.show', compact('ulasan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ulasan = Ulasan::find($id);

        return view('ulasan.edit', compact('ulasan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UlasanRequest $request, Ulasan $ulasan)
    {
        $ulasan->update($request->validated());

        return redirect()->route('ulasans.index')
            ->with('success', 'Ulasan updated successfully');
    }

    public function destroy($id)
    {
        Ulasan::find($id)->delete();

        return redirect()->route('ulasans.index')
            ->with('success', 'Ulasan deleted successfully');
    }
}
