<?php

namespace App\Http\Controllers;

use App\Models\Pekerja;
use App\Http\Requests\PekerjaRequest;
use App\Models\Majikan;
use App\Models\notifModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $title = 'Data Pekerja';
        return view('pekerja.index', compact('pekerjas', 'title'));
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
        $title = 'Detail Pekerja';
        return view('pekerja.show', compact('pekerja', 'title'));
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
    public function update(Request $request, $id)
    {
        $data = Pekerja::find($id);
        $data->status_active = $request->status;
        $data->update();

        notifModel::create([
            'jenis' => $request->jenis,
            'pesan' =>  $request->alasan,
            'tujuan_id' => $data->user?->id
        ]);

        return redirect()->back()->with('success', 'Status Akun Berhasil di Update');
    }


    public function aktif_pekerja($id)
    {
        $data = Pekerja::find($id);
        $data->status_active = 'active';
        $data->update();

        notifModel::create([
            'jenis' => 'aktif',
            'pesan' =>  'Akun Anda telah berhasil diaktivasi! Anda sekarang dapat mengakses semua fitur kami. Selamat bergabung!',
            'tujuan_id' => $data->user?->id
        ]);

        return redirect()->back()->with('success', 'Status Akun Berhasil di Update');
    }

    public function destroy($id)
    {


        $data = Pekerja::find($id);
        $user = User::find($data->user?->id);
        if (File::exists($user->foto)) {
            File::delete($user->foto);
        }

        foreach ($data->fileBerkasPekerjas as $fbp) {
            if (File::exists($fbp->lokasi)) {
                File::delete($fbp->lokasi);
            }
        }

        foreach ($data->fotoDetailPekerjaans as $fdp) {
            if (File::exists($fdp->foto)) {
                File::delete($fdp->foto);
            }
        }


        $data->delete();
        $user->delete();

        return redirect()->route('pekerjas.index')
            ->with('success', 'Hapus Pekerja Berhasil');
    }
}
