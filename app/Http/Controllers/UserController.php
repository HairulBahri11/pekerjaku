<?php

namespace App\Http\Controllers;

use App\Models\FileBerkasMajikan;
use App\Models\FileBerkasPekerja;
use App\Models\FotoDetailPekerjaan;
use App\Models\LatarBelakang;
use App\Models\LokasiKerja;
use App\Models\Majikan;
use App\Models\Pekerja;
use App\Models\Profesi;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = User::where('role', 'admin')->orderBy('created_at', 'desc')->get();

        return view('user.user', [
            'title' => 'Data User',
            'users' => $datas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.user-tambah', [
            'title' => 'Data User',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);


        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $new_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/profile'), $new_image);

            $data = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'password' => Hash::make($request->password),
                'role' => 'admin',
                'foto' => 'assets/profile/' . $new_image
            ]);
        }

        return redirect('users')->with('success', 'Data User berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::find($id);
        return view('user.user-edit', [
            'title' => 'Data User',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->no_hp = $request->no_hp;

        if ($request->hasfile('foto')) {
            $image = $request->file('foto');
            $destination = $data->foto;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/profile/'), $file_image);
            $data->foto = 'assets/profile/' . $file_image;
        }

        $data->update();

        if ($data) {
            return redirect('users')->with('success', 'Data User berhasil Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id);
        $location = $data->foto;
        if (File::exists($location)) {
            File::delete($location);
        }
        $data->delete();

        if ($data) {
            return redirect('users')->with('success', 'Data User Berhasil Dihapus');
        }
    }

    public function edit_profile($id)
    {
        $data = User::find($id);
        $profesi = Profesi::orderBy('created_at', 'desc')->get();
        $latar_belakang = LatarBelakang::orderBy('created_at', 'desc')->get();
        if ($data->role == 'admin') {
            return view('user.edit-profile', [
                'title' => 'Edit Profile',
                'data' => $data
            ]);
        } else if ($data->role == 'pekerja') {
            return view('user.edit-profile-pekerja', [
                'title' => 'Edit Profile',
                'data' => $data,
                'profesi' => $profesi,
                'latar_belakang' => $latar_belakang
            ]);
        } else {
            return view('user.edit-profile-majikan', [
                'title' => 'Edit Profile',
                'data' => $data
            ]);
        }
    }

    public function register_proses(Request $request)
    {

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'no_hp' => ['required', 'string', 'max:255'], // Perbaiki di sini
            'role' => ['required', 'string'], // Pastikan 'role' juga string
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'bukti_pembayaran' => 'nullable|file|mimes:jpg,png,jpeg,pdf|max:2048', // Validasi file
            'biaya_pendaftaran' => 'required|numeric', // Validasi tambahan jika perlu
            'rekening' => 'required|string' // Validasi rekening jika diperlukan
        ]);


        // dd($validated);
        try {
            DB::beginTransaction();

            $user = User::create([
                'name' => $validated['name'],
                'username' => $validated['username'],
                'email' => $validated['email'],
                'no_hp' => $validated['no_hp'],
                'password' => Hash::make($validated['password']),
                'role' => $validated['role'],
                'foto' => ($validated['role'] == 'pekerja') ? 'assets/img/avatar.png' : 'assets/img/avatar4.png'
            ]);

            if ($validated['role'] == 'pekerja') {
                Pekerja::create([
                    'user_id' => $user->id
                ]);
            } else {
                if ($request->hasFile('bukti_pembayaran')) {
                    $image = $request->file('bukti_pembayaran');
                    $new_image = rand() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('assets/bukti_pembayaran'), $new_image);

                    Majikan::create([
                        'user_id' => $user->id,
                        'payment_id' => $validated['rekening'],
                        'biaya_pendaftaran' => $validated['biaya_pendaftaran'],
                        'bukti_pembayaran' => 'assets/bukti_pembayaran/' . $new_image
                    ]);
                }
            }

            DB::commit();

            return redirect()->route('login')->with(['success' => 'Register Berhasil']);
        } catch (\Exception $e) {
            DB::rollback();

            // Log error yang terjadi
            \Log::error('Error registering user: ' . $e->getMessage());

            return redirect()->back()->with(['error' => 'Terjadi kesalahan, silakan coba lagi.']);
        }
    }

    public function edit_profile_proses(Request $request, $id)
    {
        if ($request->password == null) {
            $data = User::find($id);
            $data->name = $request->name;
            $data->username = $request->username;
            $data->email = $request->email;
            $data->no_hp = $request->no_hp;

            if ($request->hasfile('foto')) {
                $image = $request->file('foto');
                $destination = $data->foto;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file_image = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('assets/profile/'), $file_image);
                $data->foto = 'assets/profile/' . $file_image;
            }

            $data->update();
        } else {

            $data = User::find($id);
            $data->name = $request->name;
            $data->username = $request->username;
            $data->no_hp = $request->no_hp;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);

            if ($request->hasfile('foto')) {
                $image = $request->file('foto');
                $destination = $data->foto;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file_image = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('assets/profile/'), $file_image);
                $data->foto = 'assets/profile/' . $file_image;
            }

            $data->update();
        }
        if ($data) {
            return redirect('edit_profile/' . $id)->with('success', 'Edit Profile Berhasil');
        }
    }

    public function edit_profile_majikan_proses(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            if ($request->password == null) {
                $data = User::find($id);
                $data->name = $request->name;
                $data->username = $request->username;
                $data->email = $request->email;
                $data->no_hp = $request->no_hp;

                if ($request->hasfile('foto')) {
                    $image = $request->file('foto');
                    $destination = $data->foto;
                    if (File::exists($destination)) {
                        File::delete($destination);
                    }
                    $file_image = rand() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('assets/profile/'), $file_image);
                    $data->foto = 'assets/profile/' . $file_image;
                }

                $data->update();
            } else {

                $data = User::find($id);
                $data->name = $request->name;
                $data->username = $request->username;
                $data->no_hp = $request->no_hp;
                $data->email = $request->email;
                $data->password = Hash::make($request->password);

                if ($request->hasfile('foto')) {
                    $image = $request->file('foto');
                    $destination = $data->foto;
                    if (File::exists($destination)) {
                        File::delete($destination);
                    }
                    $file_image = rand() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('assets/profile/'), $file_image);
                    $data->foto = 'assets/profile/' . $file_image;
                }

                $data->update();
            }


            $data_majikan = Majikan::find($data->majikan?->id);
            $data_majikan->alamat = $request->alamat;
            $data_majikan->update();


            if ($request->hasFile('lokasi')) {
                $example = $request->file('lokasi');
                $nama_berkas = $request->nama_berkas;
                foreach ($example as $index => $fileExample) {
                    $extension = $fileExample->getClientOriginalExtension();
                    $rand = Str::random(5);
                    $rand1 = Str::random(3);
                    $fileExampleName = $rand . "-" . date('Ymd-his') . "-" . $rand1 . "." . $extension;
                    $destinationPath = 'assets/dokumen_upload' . '/';
                    $fileExample->move($destinationPath, $fileExampleName);

                    FileBerkasMajikan::create([
                        'majikan_id' => $data_majikan->id,
                        'nama_file' => $nama_berkas[$index],
                        'lokasi'  => $destinationPath . $fileExampleName,
                    ]);
                }
            }


            DB::commit();

            return redirect('edit_profile/' . $id)->with('success', 'Edit Profile Berhasil');
        } catch (\Exception $e) {
            DB::rollback();

            dd($e->getMessage());
            // Log error yang terjadi
            \Log::error('Error registering user: ' . $e->getMessage());

            return redirect()->back()->with(['error' => 'Terjadi kesalahan, silakan coba lagi.']);
        }
    }


    public function hapus_gallery($id)
    {
        $data = FotoDetailPekerjaan::find($id);
        $location_example = $data->foto;
        if (File::exists($location_example)) {
            File::delete($location_example);
        }
        $data->delete();
        return redirect()->back()->with('success', 'Hapus Foto Detail Pekerjaan Berhasil');
    }

    public function hapus_berkas_pekerja(Request $request)
    {
        $data = FileBerkasPekerja::find($request->id);
        $location_berkas = $data->lokasi;
        if (File::exists($location_berkas)) {
            File::delete($location_berkas);
        }
        $data->delete();
        return response()->json($data);
    }

    public function hapus_berkas_majikan(Request $request)
    {
        $data = FileBerkasMajikan::find($request->id);
        $location_berkas = $data->lokasi;
        if (File::exists($location_berkas)) {
            File::delete($location_berkas);
        }
        $data->delete();
        return response()->json($data);
    }

    public function edit_profile_pekerja_proses(Request $request, $id)
    {

        // dd($validated);
        try {
            DB::beginTransaction();
            if ($request->password == null) {
                $data = User::find($id);
                $data->name = $request->name;
                $data->username = $request->username;
                $data->email = $request->email;
                $data->no_hp = $request->no_hp;

                if ($request->hasfile('foto')) {
                    $image = $request->file('foto');
                    $destination = $data->foto;
                    if (File::exists($destination)) {
                        File::delete($destination);
                    }
                    $file_image = rand() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('assets/profile/'), $file_image);
                    $data->foto = 'assets/profile/' . $file_image;
                }

                $data->update();
            } else {

                $data = User::find($id);
                $data->name = $request->name;
                $data->username = $request->username;
                $data->no_hp = $request->no_hp;
                $data->email = $request->email;
                $data->password = Hash::make($request->password);

                if ($request->hasfile('foto')) {
                    $image = $request->file('foto');
                    $destination = $data->foto;
                    if (File::exists($destination)) {
                        File::delete($destination);
                    }
                    $file_image = rand() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('assets/profile/'), $file_image);
                    $data->foto = 'assets/profile/' . $file_image;
                }

                $data->update();
            }


            $data_pekerja = Pekerja::find($data->pekerja?->id);
            $data_pekerja->latar_belakang_id = $request->latar_belakang_id;
            $data_pekerja->profesi_id = $request->profesi_id;
            $data_pekerja->total_pengalaman = $request->total_pengalaman;
            $data_pekerja->pendidikan_terakhir = $request->pendidikan_terakhir;
            $data_pekerja->gaji_bulanan = $request->gaji_bulanan;
            $data_pekerja->tgl_lahir = $request->tgl_lahir;
            $data_pekerja->agama = $request->agama;
            $data_pekerja->deskripsi = $request->deskripsi;
            $data_pekerja->tinggi = $request->tinggi;
            $data_pekerja->berat = $request->berat;
            $data_pekerja->suku = $request->suku;
            if ($data_pekerja->status == null) {
                $data_pekerja->status = 'tersedia';
            }
            $data_pekerja->keterampilan = $request->keterampilan;
            $data_pekerja->status_pribadi = $request->status_pribadi;
            $data_pekerja->update();

            LokasiKerja::where('pekerja_id', $data_pekerja->id)->delete();
            $kota = $request->kota;
            $provinsi = $request->provinsi;
            foreach ($provinsi as $index => $lk) {
                LokasiKerja::create([
                    'pekerja_id' =>  $data_pekerja->id,
                    'kota' =>  $kota[$index],
                    'provinsi' =>  $lk,
                ]);
            }

            if ($request->hasFile('detail_pekerjaan')) {
                $example_detail_pekerjaan = $request->file('detail_pekerjaan');
                foreach ($example_detail_pekerjaan as $index => $fileExamplePekerjaan) {
                    $extension = $fileExamplePekerjaan->getClientOriginalExtension();
                    $rand = Str::random(5);
                    $rand1 = Str::random(3);
                    $fileExamplePekerjaanName = $rand . "-" . date('Ymd-his') . "-" . $rand1 . "." . $extension;
                    $destinationPath_pekerjaan = 'assets/detail_pekerjaan' . '/';
                    $fileExamplePekerjaan->move($destinationPath_pekerjaan, $fileExamplePekerjaanName);

                    FotoDetailPekerjaan::create([
                        'pekerja_id' => $data_pekerja->id,
                        'foto'  => $destinationPath_pekerjaan . $fileExamplePekerjaanName,
                    ]);
                }
            }

            if ($request->hasFile('lokasi')) {
                $example = $request->file('lokasi');
                $nama_berkas = $request->nama_berkas;
                foreach ($example as $index => $fileExample) {
                    $extension = $fileExample->getClientOriginalExtension();
                    $rand = Str::random(5);
                    $rand1 = Str::random(3);
                    $fileExampleName = $rand . "-" . date('Ymd-his') . "-" . $rand1 . "." . $extension;
                    $destinationPath = 'assets/dokumen_upload' . '/';
                    $fileExample->move($destinationPath, $fileExampleName);

                    FileBerkasPekerja::create([
                        'pekerja_id' => $data_pekerja->id,
                        'nama_berkas' => $nama_berkas[$index],
                        'lokasi'  => $destinationPath . $fileExampleName,
                    ]);
                }
            }


            DB::commit();

            return redirect('edit_profile/' . $id)->with('success', 'Edit Profile Berhasil');
        } catch (\Exception $e) {
            DB::rollback();

            dd($e->getMessage());
            // Log error yang terjadi
            \Log::error('Error registering user: ' . $e->getMessage());

            return redirect()->back()->with(['error' => 'Terjadi kesalahan, silakan coba lagi.']);
        }
    }
}
