<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function edit_profile($id)
    {
        $data = User::find($id);
        return view('user.edit-profile', [
            'title' => 'Edit Profile',
            'data' => $data
        ]);
    }

    public function edit_profile_proses(Request $request, $id)
    {
        if ($request->password == null) {
            $data = User::find($id);
            $data->name = $request->name;
            $data->username = $request->username;
            $data->kelas = $request->kelas;
            $data->mata_kuliah = $request->mata_kuliah;
            $data->email = $request->email;

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
            $data->kelas = $request->kelas;
            $data->mata_kuliah = $request->mata_kuliah;
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
