<?php

namespace App\Http\Controllers;

use App\Models\FileBerkasMajikan;
use App\Http\Requests\FileBerkasMajikanRequest;

/**
 * Class FileBerkasMajikanController
 * @package App\Http\Controllers
 */
class FileBerkasMajikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fileBerkasMajikans = FileBerkasMajikan::paginate();

        return view('file-berkas-majikan.index', compact('fileBerkasMajikans'))
            ->with('i', (request()->input('page', 1) - 1) * $fileBerkasMajikans->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fileBerkasMajikan = new FileBerkasMajikan();
        return view('file-berkas-majikan.create', compact('fileBerkasMajikan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FileBerkasMajikanRequest $request)
    {
        FileBerkasMajikan::create($request->validated());

        return redirect()->route('file-berkas-majikans.index')
            ->with('success', 'FileBerkasMajikan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $fileBerkasMajikan = FileBerkasMajikan::find($id);

        return view('file-berkas-majikan.show', compact('fileBerkasMajikan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fileBerkasMajikan = FileBerkasMajikan::find($id);

        return view('file-berkas-majikan.edit', compact('fileBerkasMajikan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FileBerkasMajikanRequest $request,  $id)
    {
        FileBerkasMajikan::find($id)->update($request->validated());

        return redirect()->route('file-berkas-majikans.index')
            ->with('success', 'FileBerkasMajikan updated successfully');
    }

    public function destroy($id)
    {
        FileBerkasMajikan::find($id)->delete();

        return redirect()->route('file-berkas-majikans.index')
            ->with('success', 'FileBerkasMajikan deleted successfully');
    }
}
