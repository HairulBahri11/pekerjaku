<?php

namespace App\Http\Controllers;

use App\Models\Majikan;
use App\Http\Requests\MajikanRequest;

/**
 * Class MajikanController
 * @package App\Http\Controllers
 */
class MajikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majikans = Majikan::orderBy('created_at', 'desc')->get();
        $title = 'Data Majikan';

        return view('majikan.index', compact('majikans', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $majikan = new Majikan();
        return view('majikan.create', compact('majikan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MajikanRequest $request)
    {
        Majikan::create($request->validated());

        return redirect()->route('majikans.index')
            ->with('success', 'Majikan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $majikan = Majikan::find($id);

        return view('majikan.show', compact('majikan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $majikan = Majikan::find($id);
        $title = 'Data Majikan';


        return view('majikan.edit', compact('majikan', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MajikanRequest $request,  $id)
    {
        Majikan::find($id)->update($request->validated());

        return redirect()->route('majikans.index')
            ->with('success', 'Majikan updated successfully');
    }

    public function destroy($id)
    {
        Majikan::find($id)->delete();

        return redirect()->route('majikans.index')
            ->with('success', 'Majikan deleted successfully');
    }
}
