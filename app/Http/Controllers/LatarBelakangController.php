<?php

namespace App\Http\Controllers;

use App\Models\LatarBelakang;
use App\Http\Requests\LatarBelakangRequest;

/**
 * Class LatarBelakangController
 * @package App\Http\Controllers
 */
class LatarBelakangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $latarBelakangs = LatarBelakang::paginate();

        $title = 'Data Latar Belakang';
        return view('latar-belakang.index', compact('latarBelakangs', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $latarBelakang = new LatarBelakang();
        return view('latar-belakang.create', compact('latarBelakang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LatarBelakangRequest $request)
    {
        LatarBelakang::create($request->validated());

        return redirect()->route('latar_belakang.index')
            ->with('success', 'Tambah Latar Belakang Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $latarBelakang = LatarBelakang::find($id);

        return view('latar-belakang.show', compact('latarBelakang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $latarBelakang = LatarBelakang::find($id);
        $title = 'Edit Latar Belakang';

        return view('latar-belakang.edit', compact('latarBelakang', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LatarBelakangRequest $request, LatarBelakang $latarBelakang)
    {
        $latarBelakang->first()->update($request->validated());

        return redirect()->route('latar_belakang.index')
            ->with('success', 'Update Latar Belakang Berhasil');
    }

    public function destroy($id)
    {
        LatarBelakang::find($id)->delete();

        return redirect()->route('latar_belakang.index')
            ->with('success', 'Hapus Latar Belakang Berhasil');
    }
}
