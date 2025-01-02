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

    public function login()
    {
        $title = "Login";
        return view('login', compact('title'));
    }

    public function register(){
        $title = "Register";
        return view('register', compact('title'));
    }

}
