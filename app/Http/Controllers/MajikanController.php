<?php

namespace App\Http\Controllers;

use App\Models\Majikan;
use App\Http\Requests\MajikanRequest;
use App\Models\notifModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $title = 'Detail Majikan';

        return view('majikan.show', compact('majikan', 'title'));
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
    public function update(Request $request, $id)
    {
        $data = Majikan::find($id);
        $data->status = $request->status;
        $data->update();

        notifModel::create([
            'jenis' => $request->jenis,
            'pesan' =>  $request->alasan,
            'tujuan_id' => $data->user?->id
        ]);

        return redirect()->back()->with('success', 'Status Akun Berhasil di Update');
    }

    public function aktif_majikan($id)
    {
        $data = Majikan::find($id);
        $data->status = 'active';
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

        $data = Majikan::find($id);
        $user = User::find($data->user?->id);
        if (File::exists($user->foto)) {
            File::delete($user->foto);
        }

        foreach ($data->fileBerkasMajikans as $fbm) {
            if (File::exists($fbm->lokasi)) {
                File::delete($fbm->lokasi);
            }
        }

        $data->delete();
        $user->delete();

        return redirect()->route('majikans.index')
            ->with('success', 'Hapus Majikan Berhasil');
    }


    //     "Akun Anda telah berhasil diaktivasi! Anda sekarang dapat mengakses semua fitur kami. Selamat bergabung!"
    //     "Aktivasi akun Anda telah berhasil! Selamat datang, dan terima kasih telah bergabung dengan kami."

    // Notifikasi Non-Aktivasi Akun

    //     "Akun Anda saat ini tidak aktif. Silakan hubungi tim dukungan untuk info lebih lanjut."
    //     "Akun Anda telah dinonaktifkan. Jika Anda merasa ini adalah kesalahan, jangan ragu untuk menghubungi kami."

    // Notifikasi Penolakan Akun

    //     "Pendaftaran akun Anda telah ditolak. Jika Anda memiliki pertanyaan, silakan hubungi tim dukungan kami."
    //     "Maaf, namun akun Anda tidak dapat dibuat. Untuk informasi lebih lanjut, silakan hubungi kami."

}
