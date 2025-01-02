<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class websiteController extends Controller
{
    public function index(){
        $title = "Website";
        return view('website.index', compact('title'));
    }

    public function billing(){
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

}
