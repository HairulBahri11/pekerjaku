<?php

namespace App\Http\Controllers;

use App\Models\Majikan;
use App\Models\Pekerja;
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
        $location = $data->photo;
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
        return view('user.edit-profile', [
            'title' => 'Edit Profile',
            'data' => $data
        ]);
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

            if ($request->hasfile('photo')) {
                $image = $request->file('photo');
                $destination = $data->photo;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file_image = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('assets/profile/'), $file_image);
                $data->photo = 'assets/profile/' . $file_image;
            }

            $data->update();
        } else {

            $data = User::find($id);
            $data->name = $request->name;
            $data->username = $request->username;
            $data->no_hp = $request->no_hp;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);

            if ($request->hasfile('photo')) {
                $image = $request->file('photo');
                $destination = $data->photo;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file_image = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('assets/profile/'), $file_image);
                $data->photo = 'assets/profile/' . $file_image;
            }

            $data->update();
        }
        if ($data) {
            return redirect('edit_profile/' . $id)->with('success', 'Edit Profile Berhasil');
        }
    }
}
