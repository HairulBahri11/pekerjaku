<?php

namespace App\Http\Controllers;

use App\Models\notifModel;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function hapus_notif(Request $request)
    {
        $data = notifModel::find($request->id);
        $data->delete();
        return response()->json($data);
    }

    public function index()
    {
        $title = "Dashboard";
        $data = Auth::user();
        $notif = notifModel::where('tujuan_id', Auth::user()->id)->get();
        return view('user.dashboard', compact('title', 'data', 'notif'));
    }
}
