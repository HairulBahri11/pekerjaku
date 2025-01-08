<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\LatarBelakang;
use App\Models\Pekerja;
use App\Models\Profesi;
use App\Models\Ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class websiteController extends Controller
{
    public function index()
    {
        $title = "Home";
        $data = DB::table('v_product')->orderBy('rating', 'desc')->limit(8)->get();
        return view('website.index', compact('title', 'data'));
    }

    public function home_latar_belakang($id)
    {
        $title = LatarBelakang::find($id)->latar_belakang;
        $data = DB::table('v_product')->where('latar_belakang_id', $id)->orderBy('rating', 'desc')->get();
        return view('website.latar_belakang', compact('title', 'data'));
    }

    public function home_profesi($id)
    {
        $title = Profesi::find($id)->profesi;
        $data = DB::table('v_product')->where('profesi_id', $id)->orderBy('rating', 'desc')->get();
        return view('website.profesi', compact('title', 'data'));
    }


    public function pekerja_detail($id)
    {
        $title = Pekerja::find($id)->user?->name;
        $pekerja =  Pekerja::find($id);
        $ulasan = DetailTransaksi::where('pekerja_id', $id)->get();
        $pekerja_lain = DB::table('v_product')->whereNot('id', $id)->orderBy('rating', 'desc')->limit(8)->get();
        $data = DB::table('v_product')->where('id', $id)->first();
        return view('website.details', compact('title', 'data', 'pekerja_lain', 'pekerja', 'ulasan'));
    }

    public function billing()
    {
        $title = "Billing Information";
        return view('website.billing-information', compact('title'));
    }

    public function details()
    {
        $title = "Details";
        return view('website.details', compact('title'));
    }
    public function order()
    {
        $title = "order";
        return view('website.order', compact('title'));
    }

    public function login()
    {
        $title = "Login";
        return view('login', compact('title'));
    }

    public function register()
    {
        $title = "Register";
        return view('register', compact('title'));
    }
}
